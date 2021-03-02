export default class NewsModal {
  constructor(target, btn, modal) {
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
        nextEl.classList.toggle('is-open');
        history.pushState({}, '', href);
      });

      nextEl.firstElementChild.addEventListener('click', () => {
        nextEl.classList.remove('is-open');
        //history.replaceState(null, null, window.location.href);
        history.back();
      })


    });

    this.btn.forEach((item) => {
      item.addEventListener('click', () => {
        item.parentElement.classList.remove('is-open');
        //history.replaceState(null, null, window.location.href);
        history.back()
      });
    });
  }
}