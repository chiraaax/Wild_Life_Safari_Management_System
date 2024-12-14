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

