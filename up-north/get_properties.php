<?php
require_once("../db_connect.php");
$con = mysqli_connect($servername, $db_username, $db_password, $db_name);

$sql = "SELECT a.accommodations_id as id, a.location, v.view, a.sleeps, a.price, t.housing_type, a.description, a.image
        FROM accommodations a
        JOIN `view` v ON a.view = v.view_id
        JOIN housing_type t ON a.type = t.housing_type_id
        WHERE 1=1";

// View filter
if (!empty($_GET['view'])) {
    $view = intval($_GET['view']);
    $sql .= " AND a.view = $view";
}

// Type filter
if (!empty($_GET['type'])) {
    $type = intval($_GET['type']);
    $sql .= " AND a.type = $type";
}

// Sleeps filter
if (!empty($_GET['sleeps'])) {
    $sleeps = intval($_GET['sleeps']);
    $sql .= " AND a.sleeps >= $sleeps";
}

// Price filter
if (!empty($_GET['price'])) {
    $price = intval($_GET['price']);
    $sql .= " AND a.price <= $price";
}

$result = mysqli_query($con, $sql);

while($item = mysqli_fetch_assoc($result)){
    echo "
        <div class='col'>
        <div class='card h-100 property-card' data-id='{$item['id']}'>
            <img src='images/{$item['image']}' class='card-img-top' alt='{$item['location']}'>
            <div class='card-body'>
            <h5>{$item['location']}</h5>
            <p>Type: {$item['housing_type']}</p>
            <p>View: {$item['view']}</p>
            <p>Sleeps: {$item['sleeps']}</p>
            <p>\${$item['price']} a night</p>
            <p>{$item['description']}</p>
            </div>
        </div>
        </div>";
}

while($item = mysqli_fetch_assoc($result)) {
    echo json_encode($item);
}
?>