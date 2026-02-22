/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close');

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu');
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu');
    })
}


/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction() {
    const navMenu = document.getElementById('nav-menu');
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu');
}
navLink.forEach(n => n.addEventListener('click', linkAction));

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader() {
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    if (this.scrollY >= 50) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*=================Start Engine=============================*/
const engineButton = document.getElementById('engineButton');
const carEngineAudio = document.getElementById('carEngine');

// Add event listener to the button
engineButton.addEventListener('click', () => {
  carEngineAudio.currentTime = 0; // Restart audio from the beginning
  carEngineAudio.play(); // Play the car engine sound
  setTimeout(() => {
    window.location.hash = '#news'; // Redirect to the target section
  }, 2000);
});

/*===============  JS FOR VIDEO SLIDER ===============*/
const btns = document.querySelectorAll(".slider__bg-navBtn");
const slides = document.querySelectorAll(".video__slide");
let currentIndex = 0; // Keep track of the current slide
const slideInterval = 10000; 

// Function to navigate the slider
var sliderNav = function(manual) {
    btns.forEach((btn) => {
        btn.classList.remove("active");
    });

    slides.forEach((slide) => {
        slide.classList.remove("active");
    });

    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
    currentIndex = manual; // Update the current index
};

// Add click event listeners to buttons for manual navigation
btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        clearInterval(autoSlide); // Stop automatic sliding when manually navigating
        sliderNav(i);
        startAutoSlide(); // Restart automatic sliding
    });
});

// Function to start automatic sliding
const startAutoSlide = () => {
    autoSlide = setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length; // Loop back to the first slide
        sliderNav(currentIndex);
    }, slideInterval);
};

// Start automatic sliding
let autoSlide = null;
startAutoSlide();

/*===============  JS FOR SLIDE SHOW ===============*/
const slides2 = document.querySelector('.slides');
const dots = document.querySelectorAll('.dot');
const totalSlides = dots.length;
let currentIndex2 = 0;

function showSlide(index) {
  slides2.style.transform = `translateX(-${index * 100}%)`;
  dots.forEach(dot => dot.classList.remove('active'));
  dots[index].classList.add('active');
}

function nextSlide() {
  currentIndex2 = (currentIndex2 + 1) % totalSlides;
  showSlide(currentIndex2);
}

dots.forEach(dot => {
  dot.addEventListener('click', () => {
    currentIndex2 = parseInt(dot.getAttribute('data-index'));
    showSlide(currentIndex2);
  });
});

// Auto-slide every 3 seconds
setInterval(nextSlide, 3000);

// Initialize
showSlide(currentIndex2);

/*=============== POPULAR SWIPER ===============*/

const container = document.getElementById('brand');

function scrollLeft() {
    const scrollAmount = 220; // Adjust based on item width
    if (container.scrollLeft === 0) {
      // If at the beginning, jump to the end
      container.scrollLeft = container.scrollWidth;
    } else {
      container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    }
}

function scrollRight() {
    const scrollAmount = 220; // Adjust based on item width
    if (container.scrollLeft + container.clientWidth >= container.scrollWidth) {
      // If at the end, jump to the start
      container.scrollLeft = 0;
    } else {
      container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
}

const container2 = document.getElementById('shop');

function scrollLeft() {
    const scrollAmount = 220; // Adjust based on item width
    if (container2.scrollLeft === 0) {
      // If at the beginning, jump to the end
      container2.scrollLeft = container2.scrollWidth;
    } else {
      container2.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    }
}

function scrollRight() {
    const scrollAmount = 220; // Adjust based on item width
    if (container2.scrollLeft + container2.clientWidth >= container2.scrollWidth) {
      // If at the end, jump to the start
      container2.scrollLeft = 0;
    } else {
      container2.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
}
/*=============== MIXITUP FILTER FEATURED ===============*/

let mixerFeatured = mixitup('.featured__content', {
    selectors: {
        target: '.featured__card'
    },
    animation: {
        duration: 300
    }
});

/* Link active color featured */

const linkFeatured = document.querySelectorAll('.featured__item');

function activeFeatured(){
    linkFeatured.forEach(l=>l.classList.remove('active-featured'));
    this.classList.add('active-featured');
}

linkFeatured.forEach(l=> l.addEventListener('click', activeFeatured));


/*=============== SHOW SCROLL UP ===============*/
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 350) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/

const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop - 58,
              sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)


const d = new Date();
document.getElementById("date").innerHTML = d;


/*=============== SCROLL REVEAL ANIMATION ===============*/

const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    //reset: true
})


sr.reveal(`.home__title, .popular__container, .features__img, .featured__filters`);
sr.reveal(`.home__subtitle`, {delay: 500});
sr.reveal(`.home__elec`, {delay: 600});
sr.reveal(`.home__img`, {delay: 800});
sr.reveal(`.home__car-data, .footer__copy`, {delay: 900, interval: 100, origin: 'bottom'});
sr.reveal(`.home__button`, {delay: 1000, origin: 'bottom'});

sr.reveal(`.about__group, .offer__data`, {origin: 'left'});
sr.reveal(`.about__data, .offer__img, .home__social-icon`, {origin: 'right'});

sr.reveal(`.features__map, .slider__bg`, {delay:600, origin: 'bottom'});
sr.reveal(`.features__card`, {interval: 300});
sr.reveal(`.featured__card, .logos__content, .footer__content`, {interval: 100});
