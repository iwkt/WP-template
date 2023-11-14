const ambaNavSwiper = document.getElementsByClassName(
  "p-ambassador__nav swiper"
)[0];
const swiperWrapper = document.getElementsByClassName("swiper-wrapper");
const swiperSlides = document.getElementsByClassName("swiper-slide");
const breakPoint = 960;
let mySwiper;
let mySwiperBool;

if (swiperSlides.length > 1) {
  window.addEventListener(
    "load",
    () => {
      if (breakPoint >= window.innerWidth) {
        mySwiperBool = false;
      } else {
        createSwiper();
        mySwiperBool = true;
      }
    },
    false
  );

  window.addEventListener(
    "resize",
    () => {
      if (breakPoint > window.innerWidth && mySwiperBool) {
        mySwiper.destroy(false, true);
        mySwiperBool = false;
      } else if (breakPoint <= window.innerWidth && !mySwiperBool) {
        createSwiper();
        mySwiperBool = true;
      }
    },
    false
  );

  const createSwiper = () => {
    if (swiperSlides.length % 2 == 0) {
      ambaNavSwiper.style.width = (swiperSlides.length + 1) * 288 + 24 + "px";
    } else {
      ambaNavSwiper.style.width = (swiperSlides.length + 2) * 288 + 24 + "px";
    }

    mySwiper = new Swiper(".swiper", {
      speed: 1500,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      loop: true,
      //freeMode: true,
      //freeModeMomentum: false,
      spaceBetween: 24,
      slidesPerView: "auto",
      loopedSlidesLimit: false,
      loopedSlides: swiperSlides.length,
      centeredSlides: true,
      grabCursor: true,
    });
  };
} else {
  for (let i = 0; i < swiperWrapper.length; i++) {
    swiperWrapper[i].style.justifyContent = "center";
  }
}
