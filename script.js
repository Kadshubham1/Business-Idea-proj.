let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>
{
   
    searchForm.classList.toggle('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}


let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>
{
    

    searchForm.classList.remove('active');
    loginForm.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>
{
    
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.toggle('active');
}


//  screen active

window.onscroll = () =>
{
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}


// product slider
var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
   

    autoplay:{
        delay:7500,
        disableOnInteraction:false,
    },
   
    breakpoints: {
      640: {
        slidesPerView: 1,
     
      },
      768: {
        slidesPerView: 2,
        
      },
      1020: {
        slidesPerView: 3,
       
      },
    },
  });


  // review
  var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
   

    autoplay:{
        delay:7500,
        disableOnInteraction:false,
    },
   
    breakpoints: {
      640: {
        slidesPerView: 1,
     
      },
      768: {
        slidesPerView: 2,
        
      },
      1020: {
        slidesPerView: 3,
       
      },
    },
  });
