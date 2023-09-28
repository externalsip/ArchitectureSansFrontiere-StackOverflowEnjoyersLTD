/*
swiper in the hero uses swipe.js, this is the code that makes said swiper work.
*/

const swiperPro = new Swiper('.swiperProject', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      spaceBetween: 60,

    },
    autoplay: {
        delay:2500,
        disableOnInteraction: false,
    }
  });

const swiperAct1 = new Swiper('.swiperActIMG', {
  direction:"horizontal",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  effect: "fade",
  loop:true,
});
const swiperAct2 = new Swiper('.swiperActTXT', {
  direction:"horizontal",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop:true,
});