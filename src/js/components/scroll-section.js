export default class ScrollSection {
  constructor(target) {
    this.target = target;
    this.init();
  }

  init() {
    let observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {

        if (entry.isIntersecting) {
          entry.target.classList.add('is-active');
        }
        else {
          entry.target.classList.remove('is-active');
        }

      });
    }, {
        rootMargin: (window.matchMedia("(orientation: landscape)").matches) ? '-50px 200px -50px 200px' : '-300px 200px -300px 200px'
    });

    document.querySelectorAll(this.target).forEach((e) => {
      observer.observe(e);
    });
  }
}
