$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots:true,
      items: 1,
    });
  });

  // function which animates the hamburger on user click

var $hamburger = $(".hamburger");
$hamburger.on("click", function (e) {
  $hamburger.toggleClass("is-active");
});


$(document).ready(function () {
  $(".slide-toggle").click(function () {
    $(".sidebar").animate({
      width: "toggle"
    });
  });
});

$(document).ready(function () {
  $(".slide-toggle").click(function () {
    $(".sidebar-full").animate({
      width: "toggle"
    });
  });
});

// When the user scrolls the page, execute myFunction
window.onscroll = function() {navSticky()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function navSticky() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} 