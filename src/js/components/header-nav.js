import CONST from '../constants/index';
import { scrollAble, scrollLock } from "./scroll-able-lock";

export default class HeaderNav {
  constructor(target, parent, link) {
    this.target = document.querySelector(target);
    this.parent = document.querySelector(parent);
    this.link = document.querySelectorAll(link);
    this.init();
  }

  init() {
    this.target.addEventListener('click', () => {
      this.target.classList.toggle(CONST.OPEN_CLASS);
      this.parent.classList.toggle(CONST.OPEN_CLASS);
      if(this.parent.classList.contains(CONST.OPEN_CLASS)) {
        scrollLock();
      } else {
        scrollAble();
      }
    });

    this.link.forEach((item) => {
      item.addEventListener('click', () => {
        this.target.classList.remove(CONST.OPEN_CLASS);
        this.parent.classList.remove(CONST.OPEN_CLASS);
        scrollAble();
        this.link.forEach((item) => {
          item.classList.remove(CONST.ACTIVE_CLASS);
        });
        item.classList.add(CONST.ACTIVE_CLASS);
      });
    });
  }
}
