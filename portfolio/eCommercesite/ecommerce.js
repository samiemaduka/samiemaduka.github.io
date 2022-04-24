const slideImage = document.querySelectorAll (".slide-image");
const slideContainer = document.querySelector (".slide-container");
const nextBtn = document.querySelector (".next-btn");
const prevBtn = document.querySelector (".prev-btn");
const navigationDots = document.querySelector (".navigation-dots");
let numberOfImages = slideImage.length;
let slideWidth = slideImage[0].clientWidth;
let currentSlide = 0;

function init() {
    /* slideImage[0] = 0
    slideImage[1] = 100%
    slideImage[2] = 200%
     */
    slideImage.forEach((img, i) => {
        img.style.left = i * 100 + "%";
    });
    slideImage[0].classList.add("active");
    createNavigationDots();
}
init();

//create navigation dots

function createNavigationDots() {
    for (let i = 0; i < numberOfImages; i++) {
        const dot = document.createElement("div");
        dot.classList.add ("single-dots");
        navigationDots.appendChild(dot);
        dot.addEventListener ("click", () => {
            goToSlide(i);
        })
    }
    navigationDots.children[0].classList.add("active");
}

//next button
nextBtn.addEventListener("click", () => {
    if (currentSlide >= numberOfImages - 1) {
        goToSlide (0);
        return;
    }

    currentSlide++;
    goToSlide(currentSlide);
});

//prev button

prevBtn.addEventListener("click", () => {
    if (currentSlide <= 0) {
        goToSlide (numberOfImages - 1);
        return;
    }

    currentSlide--;
    goToSlide(currentSlide);
});

function goToSlide (slideNumber) {
    slideContainer.style.transform = 
    "translateX(-" + slideWidth * slideNumber + "px)";
    currentSlide = slideNumber
    setActiveClass();
}
function setActiveClass() {
    //set active class for slide image
    let currentActive = document.querySelector (".slide-image.active");
    currentActive.classList.remove("active")
    slideImage[currentSlide].classList.add("active")
    
    //set active class for navigation dots
    let currentDot = document.querySelector (".single-dots.active");
    currentDot.classList.remove ("active");
    navigationDots.children[currentSlide].classList.add("active");
}





































