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
      autoplay: {
        delay: 2500,
      },
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

    function setBannerHeight() {
      let bannerEl = document.querySelector('.js-banner-content-bg');
      let bannerContent = document.querySelector('.js-banner-content');
      let headerHeight = document.querySelector('.header').offsetHeight;
      if(window.innerWidth <= 767 && window.matchMedia("(orientation: portrait)").matches) {
        bannerEl.style.height = `${(window.innerHeight - headerHeight) - 85}px`;
        bannerContent.style.height = `${((window.innerHeight - headerHeight) - 85) + 200}px`;
        console.log((window.innerHeight - headerHeight) + 100);
      }
      else {
        bannerEl.style.height = `657px`;
        bannerContent.style.height = `${657 + 200}px`;
      }
    };

    window.addEventListener('resize', function () {
      setBannerHeight();
    });
    
    window.addEventListener('orientationchange', function () {
      setBannerHeight();
    });

    setBannerHeight();
  }
}


