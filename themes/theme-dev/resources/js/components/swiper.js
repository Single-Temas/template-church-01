import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

new Swiper(".js-swiper", {
  modules: [Navigation, Pagination],

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".js-swiper-button-prev",
  },

  pagination: {
    el: ".js-swiper-pagination",
    type: "bullets",
  },
});
