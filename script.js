// JavaScript for the navigation menu toggle
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

// JavaScript for closing the menu on scroll
window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

// JavaScript for the Swiper slider
var swiper = new Swiper(".home-slider", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slider", {
    loop: true,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
    },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem=3;

loadMoreBtn.onclick = () =>{
  let boxes =[...document.querySelectorAll('.packages .box-container .box')];
  for(var i=currentItem;i<currentItem+3;i++){
    boxes[i].style.display='inline-block';
  };
  currentItem+=3;
  if(currentItem>=boxes.length){
    loadMoreBtn.style.display='none';
  }
}