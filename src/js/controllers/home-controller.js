import $ from 'jquery';
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';
import BaseController from './base-controller';
import modal from '../components/modal.js';
import popState from '../components/popstate.js';
import closeModal from '../components/close-modal.js';
import dotdotdot from '../components/dotdotdot';
import Isotope from 'isotope-layout';
import imagesLoaded from 'imagesloaded';
import preload from '../components/preload';

export default class HomeController extends BaseController {
  init() {
    console.log('home');
    
    modal('.js-index-news-list', '.js-article-link', '.js-article-modal-overlay', '.js-modal-close');

    popState();
    //preload();

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

    closeModal('.js-index-news-list', '.js-modal', '.js-single-news-btn');

    dotdotdot();

    function setBannerHeight() {
      let bannerEl = document.querySelector('.js-banner-content-bg');
      let bannerContent = document.querySelector('.js-banner-content');
      let headerHeight = document.querySelector('.header').offsetHeight;
      if(window.innerWidth <= 767 && window.matchMedia("(orientation: portrait)").matches) {
        bannerEl.style.height = `${(window.innerHeight - headerHeight) - 85}px`;
        bannerContent.style.height = `${((window.innerHeight - headerHeight) - 85) + 200}px`;
        console.log((window.innerHeight - headerHeight) + 100);
        console.log('true');
      }
      else if(window.innerWidth <= 767 && window.matchMedia("(orientation: landscape)").matches) {
        bannerEl.style.height = `657px`;
        bannerContent.style.height = `${657 + 200}px`;
      }
      else {
        bannerEl.removeAttribute("style");
        bannerContent.removeAttribute("style");
      }

      if(window.outerHeight < 657 && window.matchMedia("(orientation: landscape)").matches) {
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

    //if(window.innerWidth <= 767) {
      setBannerHeight();
    //}
    

    let grid = document.querySelector('.js-index-news-list');
    let iso;

    imagesLoaded( grid, function() {
      // init Isotope after all images have loaded
      iso = new Isotope( grid, {
        itemSelector: '.news-block',
        percentPosition: true,
        masonry: {
          columnWidth: 314,
          gutter: '.gutter-sizer',
          horizontalOrder: true,
          fitWidth: true,
        }
      });
    });
  }
}


