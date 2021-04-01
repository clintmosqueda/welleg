import $ from 'jquery';
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';
import BaseController from './base-controller';
import Modal from '../components/modal.js';
import popState from '../components/popstate.js';
import closeModal from '../components/close-modal.js';
import dotdotdot from '../components/dotdotdot';

export default class HomeController extends BaseController {
  init() {
    console.log('home');
    new Modal('.js-article-link', '.js-modal-close');

    popState();

    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      spaceBetween: 48,
      loop: true,
      // autoplay: {
      //   delay: 2500,
      // },
      breakpoints: {
        320: {
          spaceBetween: 3,
        },
        768: {
          spaceBetween: 48,
        },
      }
    });

    closeModal('.js-modal', '.js-single-news-btn');

    dotdotdot();
  }
}


