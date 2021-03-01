import $ from 'jquery';
import 'slick-carousel/slick/slick';
import BaseController from './base-controller';
import NewsModal from '../components/news-modal.js';
import newsPopState from '../components/news-popstate.js';



export default class HomeController extends BaseController {
  init() {
    console.log('home');
    new NewsModal('.js-news-article-link', '.js-news-close');

    newsPopState();

    // setTimeout(() => {
    //   $(".swiper-slide").each(function(){
    //   let x = $(this).find('img').attr('src');
    //   //let shit = $(this).find('.sbi_item');
    //   $(this).attr('background-image', `url(${x})`);
    //   //console.log(x);
    // });
    // }, 1000)



    $('.slide-wrapper').slick({
      slidesToShow: 7,
      slidesToScroll: 1,
      //autoplay: true,
      autoplaySpeed: 2000,
    });






  }
}


