
/// Time and day is here because all files have sidebar

var date = new Date();
var todayDate = document.getElementById('date');
var todayDay = document.getElementById('day');
var todayTime = document.getElementById('time');
var noOfDay = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday","Saturday",];

function printDate() {
	var date = new Date();
	var day = date.getDate();
	var month = date.getMonth()+1;
	var year = date.getFullYear();
	todayDate.innerHTML = day + "/" + month + "/" + year;
}
window.onload = function () {
    printDate();
}

function printDay(){
	var date = new Date();
	var today = date.getDay();
	var day = noOfDay[today];
	todayDay.innerHTML = day;
}
window.onload = function () {
    printDay();
}

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

window.onload = function () {
    printTime();
}
















