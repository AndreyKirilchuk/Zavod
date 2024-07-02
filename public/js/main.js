const burger_links = document.querySelector('.burger_links');
const burger_button = document.querySelector('.burger_button');
const profile_links = document.querySelector('.profile_links');
const menu_list = document.querySelector('.menu-list');
const menu_burger = document.querySelector('.menu-burger');
const accordion_btn = document.querySelector('.accordion-btn');
const box_accordion_content = document.querySelector('.box_accordion-content');
const scrollup = document.querySelector('.scrollup');
const tovar_optionInfo = document.querySelector('.tovar_optionInfo');
const tovar_optionReviews = document.querySelector('.tovar_optionReviews');
const tovar_contentInfo = document.querySelector('.tovar_contentInfo');
const tovar_contentReviews = document.querySelector('.tovar_contentReviews');
const tovar_addReview = document.querySelector('.tovar_addReview');
const header_profile = document.querySelector('.header_profile');

//Open and close burger_menu
const toggleBurgerMenu = () => {
    burger_links.classList.toggle('active');
    burger_button.classList.toggle('active');
}

//Open and close profile menu
const toggleProfile = () => {
    profile_links.classList.toggle('active');
    header_profile.classList.toggle('active');
}

//Open and close menu
const toggleMenu = () => {
    menu_list.classList.toggle('active');
    menu_burger.classList.toggle('active');
}

//open and close accordion
accordion_btn.addEventListener('click', function (){
    if(this.innerText === '+'){
        this.innerText = '-'
    }else{
        this.innerText = '+'
    }
    box_accordion_content.classList.toggle('active');
})

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next_custom',
        prevEl: '.swiper-button-prev_custom',
    },

    keyboard: {
        enabled: true,
    },
});

window.addEventListener('scroll', () => {
    if(scrollY > 100){
        scrollup.classList.add('active')
    }else{
        scrollup.classList.remove('active');
    }
})

//mainSwiper
const swiper2 = new Swiper('.mainSwiper', {
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 4000,
        pauseOnMouseEnter: true,
    },
    speed: 700,
    effect: "fade",

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next_custom_main',
        prevEl: '.swiper-button-prev_custom_main',
    },

});

if(tovar_optionInfo){
    tovar_optionInfo.classList.add('active');
    tovar_contentInfo.classList.add('active');
}

const openInfo = () => {
    tovar_optionReviews.classList.remove('active');
    tovar_contentReviews.classList.remove('active');
    tovar_addReview.classList.remove('active');
    tovar_optionInfo.classList.add('active');
    tovar_contentInfo.classList.add('active');
}

function openReviews() {
    tovar_optionInfo.classList.remove('active');
    tovar_contentInfo.classList.remove('active');
    tovar_addReview.classList.remove('active');
    tovar_optionReviews.classList.add('active');
    tovar_contentReviews.classList.add('active');
}

function openAddReview() {
    tovar_contentReviews.classList.remove('active');
    tovar_contentInfo.classList.remove('active');
    tovar_addReview.classList.add('active');
}
