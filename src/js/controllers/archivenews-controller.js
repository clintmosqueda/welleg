import BaseController from './base-controller';
import NewsModal from '../components/news-modal.js';
import newsPopState from '../components/news-popstate.js';

export default class ArchiveNewsController extends BaseController {
  init() {
    console.log('news-archive');
    new NewsModal('.js-news-article-link', '.js-news-close');

    newsPopState();


  }
}
