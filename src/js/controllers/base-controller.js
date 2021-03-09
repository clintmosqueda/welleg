import HeaderNav from '../components/header-nav';
import ScrollSection from '../components/scroll-section';
import Chillax from '../components/chillax';

export default class BaseController {
  constructor() {
    new HeaderNav('.js-menu', '.js-header', '.js-nav-link');

    new ScrollSection('.js-observe');

    let chillaxEl = document.querySelectorAll('.js-chillax');
    chillaxEl.forEach((el) => {
      new Chillax(el);
    });

    this.init();
  }

  init() {

  }
}
