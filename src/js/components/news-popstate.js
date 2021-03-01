export default function newsPopState() {
  window.addEventListener('popstate', () => {
    let newsArticles = document.querySelectorAll('.js-news-article-link')
    newsArticles.forEach((item) => {
      let nextEl = item.nextElementSibling;
      if(window.location.href.includes(`#${nextEl.id}`)) {
        nextEl.classList.add('is-open');
      }
      else {
        nextEl.classList.remove('is-open');
      }
    });
  });
}