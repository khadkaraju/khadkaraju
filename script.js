//for fix header

// window.onscroll = function () {
//   const docScrollTop = document.documentElement.scrollTop;

//   if (window.innerWidth > 991) {
//     if (doScrollTop > 100) {
//       document.querySelector("header").classList.add("fixed")
//     }
//     else {
//       document.querySelector("header").classList.remove("fixed")

//     }
//   }
// }





//For swiper effect 

var swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});


var slideIndex = 0;
carousel();

showSlides(slideIndex);
// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) { slideIndex = 1 }
  // if (n > slides.length) { slideIndex = 1 }
  // if (n < 1) { slideIndex = slides.length }
  x[slideIndex - 1].style.display = "block";
  setTimeout(carousel, 5000); // Change image every 2 seconds
}




