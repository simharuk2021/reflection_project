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