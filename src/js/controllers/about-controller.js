import $ from 'jquery';
import 'slick-carousel/slick/slick';
import BaseController from './base-controller';
import Modal from '../components/modal.js';
import popState from '../components/popstate.js';
import singleRedirectModal from '../components/single-redirect-modal.js';

export default class AboutController extends BaseController {
  init() {
    console.log('about');
    $(document).ready(function(){
      $('.about-slider-list').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        variableWidth: true,
        autoplaySpeed: 2000,
      });
    });

    new Modal('.js-article-link', '.js-modal-close');
    popState();

    singleRedirectModal();


  }
}
