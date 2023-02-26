let myPopup = document.querySelector(".popup-box");
let overlay= document.querySelector(".overlay");
let btnClose = document.querySelector(".span");

setTimeout(poPup, 5000);

function poPup() {
  myPopup.style.display = "block";
  overlay.style.display = "block";
  
}

btnClose.onclick = function () {
  myPopup.style.display = "none";
  overlay.style.display = "none";
};

// sidebar javascript starts
function openNav() {
  document.getElementById("customer").style.height = "50vh";
  document.getElementById("main").style.marginBottom = "0";
}
function closeNav() {
  document.getElementById("customer").style.height = "0px";
  document.getElementById("main").style.marginBottom = "-30rem";
}
// sidebar javascript ends


