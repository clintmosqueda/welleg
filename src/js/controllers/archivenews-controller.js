import BaseController from './base-controller';
import Modal from '../components/modal.js';
import popState from '../components/popstate.js';

export default class ArchiveNewsController extends BaseController {
  init() {
    new Modal('.js-article-link', '.js-modal-close');

    popState();

    let referrer = document.referrer;
    let finalReferrer = referrer.substring(0, referrer.lastIndexOf('/'));

    let newsArticles = document.querySelectorAll('.js-article-link')
    newsArticles.forEach((item) => {
      let href = item.href;
      let nextEl = item.nextElementSibling;
      if(finalReferrer === href) {
        item.click();
      }

    });
  }
}
