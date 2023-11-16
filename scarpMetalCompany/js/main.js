let valueDisplays = document.querySelectorAll(".num");
let interval = 0;
valueDisplays.forEach((valueDisplay) => {
  let startValue = 1;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval);
  // let duration = 1
  let counter = setInterval(function () {
    startValue += 2;
    // startValue = endValue;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});