export default class Chillax {
  constructor(target) {
    if (target instanceof Node) {
      this.target = target;
    }
    else {
      this.target = document.querySelector(target);
    }

    this.init();
  }

  init() {
    this.onScroll = this._onScroll.bind(this);
    let speed = (this.target.dataset.speed || 1) / -10;
    let offset = this.target.getBoundingClientRect().top - document.body.getBoundingClientRect().top;

    let margin = offset - (offset / (1 - speed));

    let observer = new IntersectionObserver(this._intersectionCallback.bind(this), {
      rootMargin: `${Math.abs(margin)}px 0px ${Math.abs(margin)}px 0px`
    });

    observer.observe(this.target);
  }

  _onScroll() {
    let speed = (this.target.dataset.speed || 1) / -10;
    this.target.style.transform = `translate3d(0, ${window.pageYOffset * speed}px, 0)`;
  }

  _intersectionCallback(entries) {
    let [{ isIntersecting }] = entries;

    if (isIntersecting) {
      window.addEventListener('scroll', this.onScroll, { capture: false, passive: true });
    }
    else {
      window.removeEventListener('scroll', this.onScroll, { capture: false, passive: true });
    }
  }
}
