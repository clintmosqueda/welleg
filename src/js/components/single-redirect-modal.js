export default function singleRedirectModal() {
  let referrer = document.referrer;
  let finalReferrer = referrer.substring(0, referrer.lastIndexOf('/'));
  let newsArticles = document.querySelectorAll('.js-article-link')
  newsArticles.forEach((item) => {
    let href = item.href;
    let nextEl = item.nextElementSibling;
    if(finalReferrer.toLowerCase() === href) {
      item.click();
    }
  });
}