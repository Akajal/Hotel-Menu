
<!-- Header Section -->
<header class="header" id="header">
   <nav class="navbar container">
      <a href="./index.php" class="brand">FdZne</a>
      <div class="burger" id="burger">
         <span class="burger-line"></span>
         <span class="burger-line"></span>
         <span class="burger-line"></span>
      </div>
      <div class="menu" id="menu">
         <ul class="menu-inner">
            <li class="menu-item"><a href="#" class="menu-link">Home</a></li>
            <li class="menu-item"><a href="#" class="menu-link">About us</a></li>
         </ul>
      </div>
   </nav>
</header>


<script>
    const navbarMenu = document.getElementById("menu");
const burgerMenu = document.getElementById("burger");
const headerMenu = document.getElementById("header");

// Open Close Navbar Menu on Click Burger
if (burgerMenu && navbarMenu) {
   burgerMenu.addEventListener("click", () => {
      burgerMenu.classList.toggle("is-active");
      navbarMenu.classList.toggle("is-active");
   });
}

// Close Navbar Menu on Click Menu Links
document.querySelectorAll(".menu-link").forEach((link) => {
   link.addEventListener("click", () => {
      burgerMenu.classList.remove("is-active");
      navbarMenu.classList.remove("is-active");
   });
});

// Change Header Background on Scrolling
window.addEventListener("scroll", () => {
   if (this.scrollY >= 85) {
      headerMenu.classList.add("on-scroll");
   } else {
      headerMenu.classList.remove("on-scroll");
   }
});

$(function(){
  
  var swiper = new Swiper('.carousel-gallery .swiper-container', {
    effect: 'slide',
    speed: 900,
    slidesPerView: 5,
    spaceBetween: 20,
    simulateTouch: true,
    autoplay: {
      delay: 5000,
      stopOnLastSlide: false,
      disableOnInteraction: false
    },
    pagination: {
      el: '.carousel-gallery .swiper-pagination',
      clickable: true
    },
    breakpoints: {
      // when window width is <= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 5
      },
      // when window width is <= 480px
      425: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      // when window width is <= 640px
      768: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  }); /*http://idangero.us/swiper/api/*/

  

});

</script>