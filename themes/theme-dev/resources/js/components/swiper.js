import Swiper, { Autoplay, Navigation, Pagination } from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

new Swiper(".js-swiper-banner", {
  modules: [Navigation, Pagination],

  navigation: {
    nextEl: ".js-swiper-button-next-banner",
    prevEl: ".js-swiper-button-prev-banner",
  },

  pagination: {
    el: ".js-swiper-pagination-banner",
    type: "bullets",
  },
});

new Swiper(".js-swiper-ministries", {
  modules: [Navigation, Pagination],
  slidesPerView: 6,
  spaceBetween: 30,
  loop: true,

  navigation: {
    nextEl: ".js-swiper-button-next-ministries",
    prevEl: ".js-swiper-button-prev-ministries",
  },

  breakpoints: {
    320: {
      slidesPerView: 1.5,
      spaceBetween: 10,
    },

    992: {
      slidesPerView: 2.5,
      spaceBetween: 10,
    },

    1200: {
      slidesPerView: 6,
      spaceBetween: 30,
    },
  }
});

new Swiper(".js-swiper-calendar", {
  modules: [Navigation, Pagination],
  slidesPerView: 7,
  spaceBetween: 4,

  navigation: {
    nextEl: ".js-swiper-button-next-calendar",
    prevEl: ".js-swiper-button-prev-calendar",
  },

  breakpoints: {
    320: {
      slidesPerView: 2.5,
      spaceBetween: 10,
    },

    992: {
      slidesPerView: 4.5,
      spaceBetween: 10,
    },

    1200: {
      slidesPerView: 7,
      spaceBetween: 4,
    },
  }
});

new Swiper(".js-swiper-informative", {
  modules: [Autoplay, Pagination],
  loop: true,

  autoplay: {
    delay: 5000,
    disbledOnInteraction: false,
  },

  pagination: {
    el: ".js-swiper-pagination-informative",
    type: "bullets",
  },
});