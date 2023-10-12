//Animation GSAP sur menu hamburger du nav

let hamMenu = document.querySelector(".navbar-toggler");

hamMenu.addEventListener("mouseover", () => {
    gsap.to(hamMenu, {scale: 1.1, duration: 0.5});
});

hamMenu.addEventListener("mouseout", () => {
    gsap.to(hamMenu, {scale: 1, duration: 0.5});
});
/*
swiper in the hero uses swipe.js, this is the code that makes said swiper work.
*/
if(document.getElementById("carrousel_hero") != undefined){
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

/*
Swipers in the actuality section
*/

const swiperAct1 = new Swiper('.swiperActIMG', {
  direction:"horizontal",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  preventClicks: true,
  effect: "fade",
  loop:true,
  slidesPerView:1,
});
const swiperAct2 = new Swiper('.swiperActTXT', {
  direction:"horizontal",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  preventClicks: true,
  loop:true,
});

/*Animation GSAP sur le bouton de dons*/

const donationBtn = document.getElementById("animationBtn");

donationBtn.addEventListener("click", () => {
  gsap.timeline()
      .to(donationBtn, {scale: 1.1, duration: 0.2})
      .to(donationBtn, {scale: 1, duration: 0.3})
      .to(donationBtn, {scale: 1.1, duration: 0.4})
      .to(donationBtn, {scale: 1, duration: 0.5})
      .to(donationBtn, {scale: 1.1, duration: 0.6})
      .to(donationBtn, {scale: 1, duration: 0.7})
});
}
/*Animation GSAP dans la page 404*/

if(document.getElementById("page404") != undefined){
  gsap.timeline()
    .fromTo(".notFound__container", {y: "100vh"}, {y: 10, duration:1})
    .to(".titleChar", {y:-10, ease:Sine.InOut, stagger: 0.1, repeat:-1, yoyo:true, duration:0.5})
}