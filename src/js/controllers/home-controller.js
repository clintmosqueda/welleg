import $ from 'jquery';
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';
import BaseController from './base-controller';
import Modal from '../components/modal.js';
import popState from '../components/popstate.js';

export default class HomeController extends BaseController {
  init() {
    console.log('home');
    new Modal('.js-article-link', '.js-modal-close');

    popState();

    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      spaceBetween: 4,
      loop: true,
      autoplay: {
        delay: 2500,
      },
    });
  }
}


