const spans = document.querySelectorAll('.progress-bar span');

spans.forEach((span) => {
    span.style.width = span.dataset.width;
});

const skillsContainer= document.getElementsByClassName('skill-background');

function showProgress() {
  spans.forEach (span => {
//    const value = span.dataset.width;
   
   span.style.opacity = 1;
    span.style.width = span.dataset.width ;
});
}

function hideProgress() {
  spans.forEach (span => {
   span.style.opacity = 1;
    span.style.width = 0 ;
});
}

window.addEventListener('scroll', () => {
  const sectionPos = skillsContainer[0].getBoundingClientRect().top;

  const screenPos = window.innerHeight;

if(sectionPos < screenPos) {
    showProgress();
}else{
    hideProgress();
}
});

/////////////////////////////////////////////

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

////////////////////////////////////////////////////
const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
    
     const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
    if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
    currentlyActiveAccordionItemHeader.classList.toggle("active");
     currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});
