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





    const slider = document.querySelector(".slide-container");
    const nextBtn = document.querySelector(".next-btn");
    const prevBtn = document.querySelector(".prev-btn");
    const slides = document.querySelectorAll(".slide");
    const slideIcons = document.querySelectorAll(".slide__icon");
    const numberOfSlides = slides.length;
    var slideNumber = 0;

    //image slider next button
    nextBtn.addEventListener("click", () => {
      slides.forEach((slide) => {
        slide.classList.remove("active");
      });
      slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
      });

      slideNumber++;

      if(slideNumber > (numberOfSlides - 1)){
        slideNumber = 0;
      }

      slides[slideNumber].classList.add("active");
      slideIcons[slideNumber].classList.add("active");
    });

    //image slider previous button
    prevBtn.addEventListener("click", () => {
      slides.forEach((slide) => {
        slide.classList.remove("active");
      });
      slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
      });

      slideNumber--;

      if(slideNumber < 0){
        slideNumber = numberOfSlides - 1;
      }

      slides[slideNumber].classList.add("active");
      slideIcons[slideNumber].classList.add("active");
    });

     //image slider autoplay
    var playSlider;

    var repeater = () => {
    playSlider = setInterval(function(){
         slides.forEach((slide) => {
           slide.classList.remove("active");
         });
         slideIcons.forEach((slideIcon) => {
         slideIcon.classList.remove("active");
         });

         slideNumber++;

        if(slideNumber > (numberOfSlides - 1)){
          slideNumber = 0;
         }

         slides[slideNumber].classList.add("active");
         slideIcons[slideNumber].classList.add("active");
       }, 4000);
     }
     repeater();

     //stop the image slider autoplay on mouseover
     slider.addEventListener("mouseover", () => {
       clearInterval(playSlider);
     });

     //start the image slider autoplay again on mouseout
     slider.addEventListener("mouseout", () => {
       repeater();
     });







     