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

/*-------------------------------- 
            index page form
--------------------------------*/
// const manufactureName = document.querySelector('#manufacture-name');
// const prodTypeDiv = document.querySelector('.prod-type');
// const prodType = document.querySelector('#prod-type');
// const prodNameDiv = document.querySelector('.prod-name');
// const prodName = document.querySelector('#prod-name');
// const userSubmit = document.querySelector('.user-submit');

// manufactureName.addEventListener('click', (e)=>{
//   if( manufactureName.value === "") {
//     prodTypeDiv.classList.remove('d-none');
//   } else {
//     prodTypeDiv.classList.add('d-block');
//   }
// });

// prodType.addEventListener('click', (e)=>{
//   if( prodType.value === "") {
//     prodNameDiv.classList.remove('d-none');
//   } else {
//     prodNameDiv.classList.add('d-block');
//   }
// })
// prodName.addEventListener('click', (e)=>{
//   if( prodName.value === "") {
//     userSubmit.classList.remove('d-none');
//   } else {
//     userSubmit.classList.add('d-block');
//   }
// })



