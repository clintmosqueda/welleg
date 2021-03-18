import CONST from '../constants/index';
import { scrollAble, scrollLock } from "./scroll-able-lock";

export default class Modal {
  constructor(target, btn) {
    this.target = document.querySelectorAll(target);
    this.btn = document.querySelectorAll(btn);
    this.init();
  }

  init() {
    this.target.forEach((item) => {
      let nextEl = item.nextElementSibling;
      let href = item.href;

      item.addEventListener('click', (e) => {
        e.preventDefault();
        nextEl.classList.toggle(CONST.OPEN_CLASS);
        history.pushState({ 'prevUrl': window.location.href }, '', href);
        if(nextEl.classList.contains(CONST.OPEN_CLASS)) {
          scrollLock();
        } else {
          scrollAble();
        }
      });

      nextEl.firstElementChild.firstElementChild.addEventListener('click', () => {
        nextEl.classList.remove(CONST.OPEN_CLASS);
        //history.replaceState(null, null, window.location.href);
        history.back();
        scrollAble();
      })


    });

    this.btn.forEach((item) => {
      item.addEventListener('click', () => {
        item.parentElement.classList.remove(CONST.OPEN_CLASS);
        //history.replaceState(null, null, window.location.href);
        history.back();
        scrollAble();
      });
    });

  }
}