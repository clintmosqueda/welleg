import $ from 'jquery';
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';
import BaseController from './base-controller';
import Modal from '../components/modal.js';
import popState from '../components/popstate.js';
import singleRedirectModal from '../components/single-redirect-modal.js';

export default class AboutController extends BaseController {
  init() {
    console.log('about');

    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 2500,
      },
      breakpoints: {
        320: {
          spaceBetween: 12,
        },
        768: {
          spaceBetween: 20,
        },
      }
    });

    new Modal('.js-article-link', '.js-modal-close');
    popState();

    singleRedirectModal();


  }
}
