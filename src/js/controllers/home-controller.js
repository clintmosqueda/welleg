import $ from 'jquery';
import 'slick-carousel/slick/slick';
import BaseController from './base-controller';
import Modal from '../components/modal.js';
import popState from '../components/popstate.js';

export default class HomeController extends BaseController {
  init() {
    console.log('home');
    new Modal('.js-article-link', '.js-modal-close');

    popState();

    $('.slide-wrapper').slick({
      slidesToShow: 7,
      slidesToScroll: 1,
      //autoplay: true,
      autoplaySpeed: 2000,
    });
  }
}


