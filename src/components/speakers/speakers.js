import Swiper from "swiper";

var initSpeakersSwiper = false;
var speakersCarousel;
export default function speakersSwiper() {
    let speakersSwiperContainers = document.querySelectorAll('[data-speakers]');
    if (window.innerWidth <= 992) {
        if (!initSpeakersSwiper) {
            initSpeakersSwiper = true;
            if (speakersSwiperContainers) {
                speakersSwiperContainers.forEach((swiper) =>{
                    speakersCarousel = new Swiper(swiper, {
                        modules: [],
                        loop: true,
                        slidesPerView: 'auto',
                        spaceBetween: 20,
                        navigation: {
                            nextEl: '.swiper-btn-next',
                            prevEl: '.swiper-btn-prev',
                        }
                    });
                });

            }
        }
    } else if (initSpeakersSwiper) {
        speakersCarousel.destroy();
        initSpeakersSwiper = false;
    }
}

window.addEventListener("resize", speakersSwiper);