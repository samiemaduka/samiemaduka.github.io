// sidebar javascript starts
function openNav() {
    document.getElementById("mySidebar").style.width = "65vw";
}
function closeNav() {
    document.getElementById("mySidebar").style.width = "0px";
}
// sidebar javascript ends




/// Time and day is here because all files have sidebar

var date = new Date();
const todayDate = document.querySelector('.date');
const todayDay = document.querySelector('.day');
const todayTime = document.querySelector('.time');
const noOfDay = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday","Saturday",];

function printDate() {
	var date = new Date();
	var day = date.getDate();
	var month = date.getMonth()+1;
	var year = date.getFullYear();
	todayDate.innerHTML = day + "/" + month + "/" + year;
}
printDate();


function printDay(){
	var date = new Date();
	var today = date.getDay();
	var day = noOfDay[today];
	todayDay.innerHTML = day;
}
printDay();

function printTime(){
	var date = new Date();
	var hour = date.getHours();
	var min = date.getMinutes();
	var sec = date.getSeconds();
	var period = "AM";
	if(hour == 0){
		hour = 12;
	}
	if(hour > 12){
		hour = hour - 12; // if hour 13 ===> hour = 13-12 = 1
		period = "PM";
	}
	if(hour < 10){
		hour = "0" + hour;
	}
	if(min < 10){
		min = "0" + min;
	}
	if(sec < 10){
		sec = "0" + sec;
	}
	var time = hour + ":" + min + ":" + sec +" " + period;
	document.querySelector(".time").innerHTML = time;
	setTimeout(printTime,1000);
}
printTime();




//meet the ceo js begin
$(window).scroll(function(e){ 
	var $el = $('.fixedElement'); 
	var isPositionFixed = ($el.css('position') == 'fixed');
	if ($(this).scrollTop() > 3500 && !isPositionFixed){ 
	  $el.css({'position': 'fixed', 'bottom': '20px'}); 
	}
	if ($(this).scrollTop() < 3500 && isPositionFixed){
	  $el.css({'position': 'static', 'bottom': '8px'}); 
	} 
  });
  //meet the ceo js end


//popup js begin
  document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
document.querySelector(".calculate").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "flex";
});
//popup js end





///////////PROFIT CALCULATOR

function multiply(){
	amount = Number(document.calculator.people.value);
	per = Number(document.calculator.price.value);
day =
Number(document.calculator.days.value);
	c = amount * per / 100;
	d = day * c;
	 e = d + amount;
	document.calculator.total.value=e;
}


