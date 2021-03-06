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

// add active class in nav menu item



