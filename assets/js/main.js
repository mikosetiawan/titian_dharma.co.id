$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar");
    if ($(this).scrollTop() > $nav.height()) {
      $nav.addClass("scrolled");
      $nav.removeClass("navbar-dark");
      $nav.addClass("navbar-light");
    } else {
      $nav.removeClass("scrolled");
      $nav.addClass("navbar-dark");
      $nav.removeClass("navbar-light");
    }
  })
})

//event page-scroll
$(document).ready(function () {
  // Add smooth scrolling to all links
  $("a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});



// SCROLL REVEAL
// const sr = ScrollReveal({
//   origin: `top`,
//   distance: `30px`,
//   duration: 2000,
//   reset: true
// });

// sr.reveal(`.card, .img-konseling`, {
//   interval: 200
// });
