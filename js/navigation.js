const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const navLink = document.querySelectorAll(".nav-link");

hamburger.addEventListener("click", mobileMenu);
navLink.forEach(n => n.addEventListener("click", closeMenu));

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}


const moreButton = document.querySelector(".show-more-Button");
const lessButton = document.querySelector(".show-more-Button-weniger")
const moreText = document.querySelector(".showMoreText");
const mehrAus = document.querySelector("show-more-Button-weniger");




moreButton.addEventListener("click", showMoreText);
lessButton.addEventListener("click", removeMoreText);

function showMoreText() {
    moreText.classList.toggle("active");
    moreButton.classList.toggle("btnAus");
    lessButton.classList.toggle("btnEin");
    
}

function removeMoreText() {
    moreText.classList.remove("active");
    moreButton.classList.remove("btnAus");
    lessButton.classList.remove("btnEin");
}
