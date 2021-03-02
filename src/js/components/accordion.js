import CONST from '../constants/index';

export default class HeaderNav {
  constructor(parent, content) {
    this.parent = document.querySelectorAll(parent);
    this.content = document.querySelectorAll(content);
    this.init();
  }

  init() {
    this.parent.forEach((item) => {
      item.addEventListener('click', () => {
        let contentHeight = item.querySelector('.js-accordion-body').offsetHeight
        
        this.parent.forEach((item) => {
          item.classList.remove(CONST.OPEN_CLASS)
        })
        
        this.content.forEach((item) => {
          item.style.height = ''
        })
        
        item.classList.add(CONST.OPEN_CLASS);
        item.querySelector('.js-accordion-wrap').style.height = `${contentHeight}px`
      })
    })
  }
}