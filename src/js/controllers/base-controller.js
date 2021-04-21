import HeaderNav from '../components/header-nav';
import ScrollSection from '../components/scroll-section';
import Chillax from '../components/chillax';
import scrollHeader from '../components/scroll-header';
import marquee from '../components/marquee';

export default class BaseController {
  constructor() {
    new HeaderNav('.js-menu', '.js-header-main-wrap', '.js-nav-link', '.js-header-content');
    
    scrollHeader();
    marquee();

    new ScrollSection('.js-observe');

    let chillaxEl = document.querySelectorAll('.js-chillax');
    chillaxEl.forEach((el) => {
      new Chillax(el);
    });

    let body = document.body
    if(!body.classList.contains('home')) {
      window.addEventListener('load', () => {
        setTimeout(() => {
          body.classList.add('loaded');
        }, 800);
      });
    }



    this.init();
  }

  init() {

  }
}
