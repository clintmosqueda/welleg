import BaseController from './base-controller';
import Modal from '../components/modal.js';
import popState from '../components/popstate.js';
import singleRedirectModal from '../components/single-redirect-modal.js';

export default class ArchiveNewsController extends BaseController {
  init() {
    new Modal('.js-article-link', '.js-modal-close');

    popState();

    singleRedirectModal();
  }
}
