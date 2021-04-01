import $ from 'jquery';
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';
import BaseController from './base-controller';
import modal from '../components/modal.js';
import popState from '../components/popstate.js';
import singleRedirectModal from '../components/single-redirect-modal.js';
import closeModal from '../components/close-modal.js';
import dotdotdot from '../components/dotdotdot';

export default class AboutController extends BaseController {
  init() {
    console.log('about');

    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
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

    modal('.js-about-sdg-news-list', '.js-article-link', '.js-article-modal-overlay', '.js-modal-close');
    popState();

    singleRedirectModal();

    let historyBtn = document.querySelector('.js-history-btn');
    const showMore = () => {
      let listData = Array.prototype.slice.call(document.querySelectorAll('.js-about-history dl:not(.shown)')).slice(0, 4);
      for (let i=0; i < listData.length; i++)
      {
        listData[i].className  = 'description-list shown';
      }
      hideReadMore();
    }

    const hideReadMore = () => {
      let hiddenElements = Array.prototype.slice.call(document.querySelectorAll('.js-about-history dl:not(.shown)'));
      if(hiddenElements.length == 0)
      {
        historyBtn.parentElement.style.display = 'none';
      }
      else
      {
        historyBtn.parentElement.style.display = 'block';
      }
    }

    window.addEventListener('load', showMore);
    historyBtn.addEventListener('click', showMore);

    closeModal('.js-modal', '.js-single-sdg-btn');

    dotdotdot();

  }
}
