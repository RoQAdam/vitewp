import { debounce } from "lodash-es";

class Navigation
{
    navigations = document.querySelectorAll('.navigation');
    scrollOffset = 100;


    constructor() {
        this.init();
    }

    init()
    {
        if (this.navigations.length > 0) {
            this.navigations.forEach((navigation, i)  => {
                const toggler = navigation.querySelector('.toggler');
                let navigationBasePosition = navigation.getBoundingClientRect().top >= 0 ? navigation.getBoundingClientRect().top : 0;

                if (toggler) {
                    toggler.addEventListener('click', () => {
                        document.body.classList.toggle('menu-opened');
                        navigation.classList.toggle('active');
                    })
                }

                document.addEventListener('resize', debounce(() => {
                    navigationBasePosition = navigation.getBoundingClientRect().top;
                }));

                document.addEventListener('scroll', debounce(() => {
                    this.handleScroll(navigation, navigationBasePosition);
                }), {passive: true});

                this.handleScroll(navigation, navigationBasePosition);
            });
        }
    }

    handleScroll(navigation, navigationBasePosition) {
        const scroll = window.pageYOffset;

        if (scroll > (navigationBasePosition + this.scrollOffset)) {
            navigation.classList.add('sticky-pos');
            document.body.classList.add('sticky-nav');
        } else {
            navigation.classList.remove('sticky-pos');
            document.body.classList.remove('sticky-nav');
        }
    }
}

export default Navigation;