import BaseController from './base-controller';
import modal from '../components/modal.js';
import popState from '../components/popstate.js';
import singleRedirectModal from '../components/single-redirect-modal.js';
import closeModal from '../components/close-modal.js';
import $ from 'jquery';

export default class ArchiveNewsController extends BaseController {
  init() {
   	modal('.js-news-list', '.js-article-link', '.js-article-modal-overlay', '.js-modal-close');

 	popState();

    singleRedirectModal();

    closeModal('.js-modal', '.js-single-news-btn');
  }
}
