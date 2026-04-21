function loadProperties() {
    const view = document.getElementById("view").value;
    const type = document.getElementById("type").value;
    const sleeps = document.getElementById("sleeps").value;
    const price = document.getElementById("price").value;

    document.getElementById("accommodation").value = "";
    const params = new URLSearchParams({
        view,
        type,
        sleeps,
        price
    });

    fetch("get_properties.php?" + params.toString())
        .then(res => res.text())
        .then(data => {
            document.getElementById("results").innerHTML = data;
        });
}

// Run on page load
document.addEventListener("DOMContentLoaded", loadProperties);

// Listen for changes on ALL dropdowns
document.querySelectorAll("#filters select").forEach(select => {
    select.addEventListener("change", loadProperties);
});

const checkinPicker = flatpickr("#checkin", {
    dateFormat: "Y-m-d",
    minDate: "today",
    onChange: function(selectedDates) {
        checkoutPicker.set("minDate", selectedDates[0]);
    }
});

const checkoutPicker = flatpickr("#checkout", {
    dateFormat: "Y-m-d",
    minDate: "today"
});

document.addEventListener("click", function (e) {
    const card = e.target.closest(".property-card");

    if (!card) return;

    // remove old selection
    document.querySelectorAll(".property-card").forEach(c => {
        c.classList.remove("selected");
    });

    // mark new selection
    card.classList.add("selected");

    // store ID in hidden input
    document.getElementById("accommodation").value = card.dataset.id;
});