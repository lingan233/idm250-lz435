console.log("my js is loaded");

// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = ".25rem 2rem";
    document.getElementById("logo").style.fontSize = "1rem";
  } else {
    document.getElementById("navbar").style.padding = "1rem 2rem";
    document.getElementById("logo").style.fontSize = "1.75rem";
  }
}

$(document).ready(function(){
    $(".hamburger-container").click(function(){
      $(".menu-main-menu-container").toggle();
    });
  });