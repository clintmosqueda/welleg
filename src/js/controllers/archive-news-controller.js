import BaseController from './base-controller';
import modal from '../components/modal.js';
import popState from '../components/popstate.js';
import singleRedirectModal from '../components/single-redirect-modal.js';
import closeModal from '../components/close-modal.js';
import $ from 'jquery';
import dotdotdot from '../components/dotdotdot';

export default class ArchiveNewsController extends BaseController {
  init() {
   	modal('.js-news-list', '.js-article-link', '.js-article-modal-overlay', '.js-modal-close');

   	modal('.js-ajax-dummy-post-list', '.js-article-link', '.js-article-modal-overlay', '.js-modal-close');

 	popState();

    singleRedirectModal('news', '.js-news-list');

    closeModal('.js-news-list', '.js-modal', '.js-single-news-btn');

    dotdotdot();
  }
}
