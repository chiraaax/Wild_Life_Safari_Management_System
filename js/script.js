let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');
let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');

let userBox = document.querySelector('.header .user-box');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

searchBtn.addEventListener('click', () =>{
  searchBtn.classList.toggle('fa-times');
  searchBar.classList.toggle('active');
});

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween:20,
    // autoHeight:true,
    grabCursor: 1,
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
});

// how load more button expands and work
let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for(var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display= 'none';
    }
}


