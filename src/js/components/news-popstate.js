export default function newsPopState() {
  window.addEventListener('popstate', (event) => {
    console.log(event.state);
    let url = window.location.href;

    let newsArticles = document.querySelectorAll('.js-news-article-link')
    newsArticles.forEach((item) => {
      let nextEl = item.nextElementSibling;
      let href = item.href;
      if(window.location.href === href && event.state !== null) {
        nextEl.classList.toggle('is-open');
      }
      else {
        nextEl.classList.remove('is-open');
      }

    });
  });
}