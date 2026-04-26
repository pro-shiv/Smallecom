import "./bootstrap";

// Import Swiper and required modules
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";

// Import Swiper styles
import "swiper/css";
import "swiper/css/pagination";

document.addEventListener("DOMContentLoaded", () => {
    const swiper = new Swiper(".hero-swiper", {
        // Configure modules
        modules: [Navigation, Pagination, Autoplay],
        loop: true,
        autoplay: {
            delay: 4000, // Slides every 4 seconds
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
