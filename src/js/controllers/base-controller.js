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

    // let footerTopText = document.querySelector('.js-footer-top-text');

    // let characters = footerTopText.textContent.split("");
    // footerTopText.innerHTML = "";

    // characters.forEach((el, i) => {
    //   console.log(el);
    //   let node = document.createElement("span");
    //   node.innerHTML = el;
    //   footerTopText.appendChild(node);
    // })
    window.addEventListener('load', () => {
      setTimeout(() => {
        document.body.classList.add('loaded');
      }, 800);
    });

    this.init();
  }

  init() {

  }
}
