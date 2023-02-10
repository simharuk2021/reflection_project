$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
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

function setCookie(cname="netmatters", cvalue="today", exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

  closeModal();
}


	
// var name = 'username';
// var value = localStorage.getItem(name);
// if(value == null) {
//   setCookie().start().oncomplete(function() {
//     localStorage.setItem(name, 1)
//   });
// };

function closeModal() {
  let modal = document.getElementById('cookie-modal')
  modal.style.display = "none"
  modal.close()
}