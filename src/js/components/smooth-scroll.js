export default class SmoothScroll {
  constructor(element, options = {}) {
    if (element instanceof Node) {
      this.element = element;
    }
    else {
      this.element = document.querySelector(element);
    }
    let defaults = {
      duration: 1000,
      easing: function (t) { return t<.5 ? 2*t*t : -1+(4-2*t)*t }
    };
    this.options = Object.assign({}, defaults, options);
    this.init();
  }
  init() {
    this.element.addEventListener('click', this.scroll.bind(this));
    if (window.location.hash && this.element.hash === window.location.hash) {
      this.scroll({preventDefault: () => {}});
    }
  }
  scroll(e) {
    let target = document.querySelector(this.element.dataset.target || this.element.hash);
    if (!target) {
      return;
    }
    e.preventDefault();
    let start,
      targetPos = window.pageYOffset + target.getBoundingClientRect().top - 65,
      startPos = window.pageYOffset,
      distance = targetPos - startPos;
    let step = (timestamp) => {
      start = start || timestamp;
      let progress = (timestamp - start) / this.options.duration;
      if (progress < 1) {
        progress = this.options.easing(progress, this.options.duration);
        window.scrollTo(0, startPos + (distance * progress));
        window.requestAnimationFrame(step);
      }
      else {
        window.scrollTo(0, targetPos);
      }
    };
    window.requestAnimationFrame(step);
  }
}