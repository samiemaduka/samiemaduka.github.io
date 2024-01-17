// sidebar javascript starts
function openNav() {
    document.getElementById("mySidebar").style.height = "18rem";
    document.getElementById("main").style.marginLeft = "0";
}
  
function closeNav() {
    document.getElementById("mySidebar").style.height = "0px";
    document.getElementById("main").style.marginLeft= "0px";
}
// sidebar javascript ends

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 500px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}