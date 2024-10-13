import Swiper from "swiper";

var reviewCarousel;
export default function reviewSwiper() {
    let reviewSwiperContainer = document.querySelector('[data-review]');
    if (reviewSwiperContainer) {
        reviewCarousel = new Swiper(reviewSwiperContainer, {
            modules: [],
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-btn-next'
            },
            breakpoints: {
                576: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            }
        });
    }
}