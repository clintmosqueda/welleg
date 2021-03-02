import BaseController from './base-controller';
import NewsModal from '../components/news-modal.js';
import newsPopState from '../components/news-popstate.js';

export default class ArchiveNewsController extends BaseController {
  init() {
    new NewsModal('.js-news-article-link', '.js-news-close');

    newsPopState();

    let referrer = document.referrer;
    let finalReferrer = referrer.substring(0, referrer.lastIndexOf('/'));

    let newsArticles = document.querySelectorAll('.js-news-article-link')
    newsArticles.forEach((item) => {
      let href = item.href;
      let nextEl = item.nextElementSibling;
      if(finalReferrer === href) {
        item.click();
      }

    });
  }
}
