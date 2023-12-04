//Animation GSAP sur menu hamburger du nav

if (document.querySelector(".navbar-toggler") != undefined) {
  let hamMenu = document.querySelector(".navbar-toggler");

  hamMenu.addEventListener("mouseover", () => {
    gsap.to(hamMenu, { scale: 1.1, duration: 0.5 });
  });

  hamMenu.addEventListener("mouseout", () => {
    gsap.to(hamMenu, { scale: 1, duration: 0.5 });
  });
}

/*
swiper in the hero uses swipe.js, this is the code that makes said swiper work.
*/
if (document.getElementById("carrousel_hero") != undefined) {
  const swiperPro = new Swiper(".swiperProject", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    slidesPerView: 1,
    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      spaceBetween: 60,
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });

  /*
Swipers in the actuality section
*/

  const swiperAct1 = new Swiper(".swiperActIMG", {
    direction: "horizontal",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    preventClicks: true,
    effect: "fade",
    loop: true,
    slidesPerView: 1,
  });
  const swiperAct2 = new Swiper(".swiperActTXT", {
    direction: "horizontal",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    preventClicks: true,
    loop: true,
  });

  /*Animation GSAP sur le bouton de dons*/

  const donationBtn = document.getElementById("animationBtn");

  donationBtn.addEventListener("click", () => {
    gsap
      .timeline()
      .to(donationBtn, { scale: 1.1, duration: 0.2 })
      .to(donationBtn, { scale: 1, duration: 0.3 })
      .to(donationBtn, { scale: 1.1, duration: 0.4 })
      .to(donationBtn, { scale: 1, duration: 0.5 })
      .to(donationBtn, { scale: 1.1, duration: 0.6 })
      .to(donationBtn, { scale: 1, duration: 0.7 });
  });
}
/*Animation GSAP dans la page 404*/

if (document.getElementById("page404") != undefined) {
  gsap
    .timeline()
    .fromTo(".notFound__container", { y: "80vh" }, { y: 10, duration: 1 })
    .to(".titleChar", {
      y: -10,
      ease: Sine.InOut,
      stagger: 0.1,
      repeat: -1,
      yoyo: true,
      duration: 0.5,
    });
}

/*Animation de la timeline avec gsap sur la page histoire*/
if (document.getElementById("history") != undefined) {
  gsap.registerPlugin(ScrollTrigger);
  let timelineEvents = document.querySelectorAll(".eventContainer");
  let infoArr = document.querySelectorAll(".info");
  gsap
    .timeline({
      scrollTrigger: {
        pin: true,
        end: "1000% bottom",
        scrub: true,
        toggleActions: "restart complete reverse reset",
        trigger: "#history",
      },
    })
    .to(timelineEvents, { x: "-150vw", stagger: 5, duration: 10 })
    .to(infoArr[0], { opacity: 1, duration: 0.5, ease: "none" }, "-=24")
    .to(infoArr[0], { opacity: 0, duration: 0.5, ease: "none" }, "-=18")
    .to(infoArr[1], { opacity: 1, duration: 0.5, ease: "none" }, "<")
    .to(infoArr[1], { opacity: 0, duration: 0.5, ease: "none" }, "-=12.5")
    .to(infoArr[2], { opacity: 1, duration: 0.5, ease: "none" }, "<")
    .to(infoArr[2], { opacity: 0, duration: 0.5, ease: "none" }, "-=8")
    .to(infoArr[3], { opacity: 1, duration: 0.5, ease: "none" }, "<");
}

// Script pour l'espacement en dessous du nav

window.addEventListener("resize", spacingFunction);

let nav = document.querySelector("nav");
let navHeight = nav.clientHeight;

function spacingFunction() {
  if (document.querySelector(".hero")) {
    const hero = document.querySelector(".hero");
    hero.style.marginTop = navHeight + "px";
  } else if (document.querySelector(".generic__hero")) {
    const hero = document.querySelector(".generic__hero");
    hero.style.paddingTop = navHeight + "px";
  } else if (document.querySelector(".notFound")) {
    const hero = document.querySelector(".notFound");
    hero.style.paddingTop = navHeight + "px";
  }
}

spacingFunction();

// Scripts pour la page hub de nouvelle - quoc huy

if (document.querySelector(".articlesBtnDiv") != null) {
  let articlesBtn = document.querySelector(".articlesBtnDiv"); // bouton plus d'articles
  let rowsShownCount = 1;

  articlesBtn.addEventListener("click", function () {
    const parentSection = document.querySelector(".news_container");
    const rowDiv = document.createElement("div"); //  row div

    const rowStartComment = document.createComment("ROW START");
    const rowEndComment = document.createComment("ROW END");

    parentSection.appendChild(rowStartComment);
    parentSection.appendChild(rowDiv);

    rowDiv.classList.add("row");
    rowDiv.classList.add("gx-5");
    rowDiv.classList.add("my-3");

    rowsShownCount++;

    for (let i = 0; i <= 2; i++) {
      const cardDiv = document.createElement("div"); //  card div
      const cardBodyDiv = document.createElement("div"); //  card body div
      const imgCard = document.createElement("img"); // img
      const h5Title = document.createElement("h5"); // h5 title in the cards
      const pCard = document.createElement("p"); // paragraph element in cards
      //console.log("printed " + (i+1) + " times");

      const colDiv = document.createElement("div"); //  col div
      rowDiv.appendChild(colDiv);
      colDiv.appendChild(cardDiv); // create col, which contains the card
      colDiv.classList.add("col-4");
      cardDiv.classList.add("card");
      cardDiv.classList.add("news");
      cardDiv.appendChild(imgCard);
      imgCard.classList.add("card-img-top");
      imgCard.setAttribute(
        "src",
        "../../sources/medias/02_hub_nouvelles/image_06_nouvelle.png"
      );
      imgCard.setAttribute(
        "style",
        "border-radius: 15px; padding: 10px; max-height: 200px; object-fit: cover;"
      );
      cardDiv.appendChild(cardBodyDiv);
      cardBodyDiv.appendChild(h5Title);
      h5Title.classList.add("card-title");
      cardBodyDiv.classList.add("card-body");
      cardBodyDiv.appendChild(pCard);
      pCard.classList.add("card-text");
    }

    parentSection.appendChild(rowEndComment);

    if (rowsShownCount == 4) {
      articlesBtn.setAttribute("style", "display: none; padding-bottom: 0px;");
      console.log("remove button");
    }
    // console.log(rowsShownCount);
    // console.log("new row of articles");
  });
}

const creditBar = document.querySelector("#credits");

const close = document.querySelector("#close");

close.addEventListener("click", () => {
  creditBar.style.display = "none";
  localStorage.setItem("close", close);
});
if (localStorage.getItem("close") != null) {
  creditBar.style.display = "none";
}
