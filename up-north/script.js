$(document).ready(function() {
  let current = 0;
  const testimonials = $(".testimonial");
  const dots = $(".dot");

  function showTestimonial(index) {
    testimonials.fadeOut(300).removeClass("active");
    dots.removeClass("active");

    testimonials.eq(index).fadeIn(300).addClass("active");
    dots.eq(index).addClass("active");

    current = index;
  }

  // click dots
  dots.click(function() {
    let index = $(this).data("index");
    showTestimonial(index);
  });

  // auto rotate
  setInterval(function() {
    let next = (current + 1) % testimonials.length;
    showTestimonial(next);
  }, 5000);
});
