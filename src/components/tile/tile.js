import Swiper from "swiper/bundle";

var initTileSwiper = false;
var tileCarousel;
export default function tileSwiper() {
    let tileSwiperContainer = document.querySelector('[data-tile]');
    if (window.innerWidth <= 576) {
        if (!initTileSwiper) {
            initTileSwiper = true;
            if (tileSwiperContainer) {
                tileCarousel = new Swiper(tileSwiperContainer, {
                    modules: [],
                    loop: false,
                    slidesPerView: 'auto'
                });
            }
        }
    } else if (initTileSwiper) {
        tileCarousel.destroy();
        initTileSwiper = false;
    }
}

window.addEventListener("resize", tileSwiper);
