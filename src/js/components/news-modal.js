export default class NewsModal {
  constructor(target, btn, modal) {
    this.target = document.querySelectorAll(target);
    this.btn = document.querySelectorAll(btn);
    this.init();
  }

  init() {
    window.addEventListener('load', () => {
      this.target.forEach((item) => {
        let nextEl = item.nextElementSibling;
        if(window.location.href.includes(`#${nextEl.id}`)) {
          nextEl.classList.add('is-open');
        }
        else {
          nextEl.classList.remove('is-open');
        }
      });

    })

    this.target.forEach((item) => {
      let nextEl = item.nextElementSibling;

      item.addEventListener('click', () => {
        nextEl.classList.toggle('is-open');
      });

      nextEl.firstElementChild.addEventListener('click', () => {
        nextEl.classList.remove('is-open');
        history.replaceState(null, null, ' ');
      })


    });

    this.btn.forEach((item) => {
      item.addEventListener('click', () => {
        console.log('shit');
        item.parentElement.classList.remove('is-open');
      });
    });
  }
}