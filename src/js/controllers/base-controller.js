import HeaderNav from '../components/header-nav';
import ScrollSection from '../components/scroll-section';
import Chillax from '../components/chillax';
import scrollHeader from '../components/scroll-header';

export default class BaseController {
  constructor() {
    new HeaderNav('.js-menu', '.js-header-main-wrap', '.js-nav-link', '.js-header-content');
    
    scrollHeader();

    new ScrollSection('.js-observe');

    let chillaxEl = document.querySelectorAll('.js-chillax');
    chillaxEl.forEach((el) => {
      new Chillax(el);
    });

    // window.addEventListener('load', () => {
    //   setTimeout(() => {
    //     document.querySelector('.js-wrap').classList.add('loaded');
    //   }, 800);
    // });

    this.init();
  }

  init() {

  }
}
