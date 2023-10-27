//Animation GSAP sur menu hamburger du nav



if(document.querySelector(".navbar-toggler") != undefined){
  let hamMenu = document.querySelector(".navbar-toggler");

hamMenu.addEventListener("mouseover", () => {
    gsap.to(hamMenu, {scale: 1.1, duration: 0.5});
});

hamMenu.addEventListener("mouseout", () => {
    gsap.to(hamMenu, {scale: 1, duration: 0.5});
});
}


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
    .fromTo(".notFound__container", {y: "80vh"}, {y: 10, duration:1})
    .to(".titleChar", {y:-10, ease:Sine.InOut, stagger: 0.1, repeat:-1, yoyo:true, duration:0.5})
}


/*Animation de la timeline avec gsap sur la page histoire*/
if(document.getElementById("history") != undefined){
  gsap.registerPlugin(ScrollTrigger);
  let timelineEvents = document.querySelectorAll(".eventContainer");
  let infoArr = document.querySelectorAll(".info");
  console.log("hi");
  gsap.timeline({scrollTrigger: {
    pin: true,
    end: "1000% bottom",
    scrub: true,
    toggleActions: "restart complete reverse reset",
    trigger: "#history"
  }})
  .to(timelineEvents, {x: "-150vw", stagger: 5, duration: 10})
  .to(infoArr[0], {opacity: 1, duration: 0.5, ease: "none"}, "-=24")
  .to(infoArr[0], {opacity: 0, duration: 0.5, ease: "none"}, "-=18")
  .to(infoArr[1], {opacity: 1, duration: 0.5, ease: "none"}, "<")
  .to(infoArr[1], {opacity: 0, duration: 0.5, ease: "none"}, "-=12.5")
  .to(infoArr[2], {opacity: 1, duration: 0.5, ease: "none"}, "<")
  .to(infoArr[2], {opacity: 0, duration: 0.5, ease: "none"}, "-=8")
  .to(infoArr[3], {opacity: 1, duration: 0.5, ease: "none"}, "<")
}

// Script pour l'espacement en dessous du nav
window.addEventListener("resize", spacingFunction);
let nav = document.querySelector("nav");
let navHeight = nav.clientHeight;
function spacingFunction(){
  if(document.querySelector(".hero")){
    let hero = document.querySelector(".hero");
    hero.style.marginTop = navHeight + "px";
  }
  else if(document.querySelector(".generic__hero")){
    const hero = document.querySelector(".generic__hero");
    hero.style.paddingTop = navHeight + "px";
    console.log("space");
  }

}

spacingFunction();