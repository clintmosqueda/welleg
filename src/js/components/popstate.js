import { scrollAble, scrollLock } from "./scroll-able-lock";

export default function popState() {
  window.addEventListener('popstate', (event) => {
    let url = window.location.href;
    let newsArticles = document.querySelectorAll('.js-article-link')
    
    newsArticles.forEach((item) => {
      let nextEl = item.nextElementSibling;
      let href = item.href;
      if(window.location.href === href && event.state !== null) {
        nextEl.classList.toggle('is-open');
        scrollLock();
      }
      else {
        nextEl.classList.remove('is-open');
        scrollAble();
      }

      if(nextEl.classList.contains('is-open')) {
        scrollLock();
      }
      else {
        scrollAble();
      }

    });
  });
}