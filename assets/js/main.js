/*-------------------------------- 
            moble menu
--------------------------------*/
const menuBar = document.querySelector('.menu-bar');
const mobileMenu = document.querySelector('.mobile-menu-area');
const closeMobileMenu = document.querySelector('.close-mobile-menu');

// open mobile menu
menuBar.addEventListener( 'click', ()=> {
  mobileMenu.classList.add('show');
} );

// close mobile menu
closeMobileMenu.addEventListener( 'click', ()=> {
  mobileMenu.classList.remove('show');
} );

// modal form js
var modal = document.querySelector(".modal");
var trigger = document.querySelector(".trigger");
var closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);



