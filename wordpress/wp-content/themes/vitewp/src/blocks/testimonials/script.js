import Swiper, { Navigation, Pagination } from "swiper";
import 'swiper/css';
import 'swiper/css/pagination';

class Testimonials
{
    constructor(block) {
        this.el = block;
        this.swiperWrapper = this.el.querySelector('.swiper');
        this.swiper = '';

        if (this.swiperWrapper) {
            this.initSwiper();
        }
    }

    initSwiper() {
        this.swiper = new Swiper(this.swiperWrapper, {
            modules: [Pagination],
            slidesPerView: 1,
            spaceBetween: 12,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
                clickable: true
            },
            grabCursor: true,
            breakpoints: {
                637: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
                1280: {
                    slidesPerView: 4
                },
                1536: {
                    slidesPerView: 5
                }
            }
        });
    }
}


document.querySelectorAll('.block-testimonials').forEach((block) => {
    new Testimonials(block);
});