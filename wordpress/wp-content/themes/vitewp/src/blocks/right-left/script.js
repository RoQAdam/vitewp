import './style.css';

class RightLeft
{
    constructor(block) {
        this.el = block;
        
        this.inScrollView();
    }

    inScrollView() {
        window.onscroll = () => {
            const scroll = window.pageYOffset;

            const offset = window.pageYOffset + this.el.getBoundingClientRect().top;

            if (scroll > (offset - window.innerHeight / 1.1)) {
                this.el.classList.add('animated');
            }
        }

        window.dispatchEvent(new CustomEvent('scroll'));
    }
}

document.querySelectorAll('.block-right-left').forEach((block) => {
    new RightLeft(block);
});