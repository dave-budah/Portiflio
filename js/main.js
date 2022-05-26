window.addEventListener('scroll', function() {
    var scroll = window.scrollY;
    const header = document.querySelector('header');
   header.classList.toggle('sticky', scroll > 0);
});

//Modal
const serviceModal = document.querySelectorAll('.service-modal');
const learnMore = document.querySelectorAll('.learn-more-btn');
const modalClose = document.querySelectorAll('.modal-close-btn');

var modal = function (modalClick){
    serviceModal[modalClick].classList.add('active');
}
learnMore.forEach(function(learnMore, index){
    learnMore.addEventListener('click', function(){
        modal(index);
    });
});
modalClose.forEach(function(modalClose, index){
    modalClose.addEventListener('click', function(){
        serviceModal[index].classList.remove('active');
    });
});

const portfolioModals = document.querySelectorAll('.portfolio-modal');
const imgCards = document.querySelectorAll('.img-card');
const portfolioModalCloses = document.querySelectorAll('.portfolio-close-btn');

var portfolioModal = function (modalClick){
    portfolioModals[modalClick].classList.add('active');
}
imgCards.forEach(function(imgCard, index){
    imgCard.addEventListener('click', function(){
        portfolioModal(index);
    });
});
portfolioModalCloses.forEach(function(portfolioModalClose, index){
    portfolioModalClose.addEventListener('click', function(){
        portfolioModals[index].classList.remove('active');
    });
});

// Blog Javascript
const swiper = new Swiper(".blog-swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
// Scroll to top
const scrollToTop = document.querySelector('.scrollToTop-btn');
window.addEventListener('scroll', function(){
    if(window.scrollY > 500){
        scrollToTop.classList.add('active');
    }else{
        scrollToTop.classList.remove('active');
    }
});
scrollToTop.addEventListener('click', function(){
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Navigation
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section');
    const scrollY = window.scrollY;

    sections.forEach(current => {
        let sectionHeight = current.offsetHeight;
        let sectionTop = current.offsetTop - 50;
        let id = current.getAttribute('id');

        if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
            document.querySelector('.navigation a[href*=' + id + ']').classList.add('active');
        } else {
            document.querySelector('.navigation a[href*=' + id + ']').classList.remove('active');
        }});
});

// Theme switcher
const themeBtn = document.querySelector('.theme-btn');

themeBtn.addEventListener('click', function(){
    document.body.classList.toggle('dark');
    themeBtn.classList.toggle('sun');

    localStorage.setItem('theme', getCurrentTheme());
    localStorage.setItem('themeBtn', getCurrentIcon());
});
const getCurrentTheme = () => {
    return document.body.classList.contains('dark') ? 'dark' : 'light';
};
const getCurrentIcon = () => {
    return themeBtn.classList.contains('sun') ? 'sun' : 'moon';
};
const currentTheme = localStorage.getItem('theme');
const currentIcon = localStorage.getItem('themeBtn');

if (currentTheme) {
    document.body.classList[currentTheme === 'dark' ? 'add' : 'remove']('dark');
    themeBtn.classList[currentIcon === 'sun' ? 'add' : 'remove']('sun');
}

//Responsive Navigation
const menuBtn = document.querySelector('.nav-menu-btn');
const closeBtn = document.querySelector('.nav-close-btn');
const nav = document.querySelector('.navigation');
const navItems = document.querySelectorAll('.navigation a');

menuBtn.addEventListener('click', function(){
    nav.classList.add('active');
});
closeBtn.addEventListener('click', function(){
    nav.classList.remove('active');
});
navItems.forEach(function(navItem){
    navItem.addEventListener('click', function(){
        nav.classList.remove('active');
    });
});

// Scroll reveal
window.sr = ScrollReveal({
    reset: true,
    mobile: false,
    duration: 2500,
    delay: 100,
    scale: 1,
    easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
    viewFactor: 0.2,
    viewOffset: {top: 0, right: 0, bottom: 0, left: 0},
    afterReveal: function (domEl) {
        domEl.classList.add('animated');
    }
});
ScrollReveal().reveal('.home .info h2, .section-title-01, .section-title-02', {delay: 500, origin: 'left', distance: '100px'});
ScrollReveal().reveal('.home .info h3, .home .info p, .about-info .btn', {delay: 600, origin: 'right', distance: '100px'});
ScrollReveal().reveal('.home .info .btn', {delay: 700, origin: 'bottom', distance: '100px'});
ScrollReveal().reveal('.media-icons a, .contact-list li', {delay: 500, origin: 'left', distance: '100px', interval: 200});
ScrollReveal().reveal('.home-img, .about-img', {delay: 500, origin: 'bottom', distance: '100px'});
ScrollReveal().reveal('.about-description, .contact-right', {delay: 600, origin: 'right', distance: '100px'});
ScrollReveal().reveal('.skills-description, .services-description, .contact-card, .blog-swiper, .contact-left h2', {delay: 700, origin: 'right', distance: '100px'});
ScrollReveal().reveal('.experience-card, .service-card, education, portfolio .img-card', {delay: 800, origin: 'bottom', distance: '100px', interval: 200});
ScrollReveal().reveal('footer .group', {delay: 500, origin: 'top', interval: 200});


