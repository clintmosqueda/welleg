import $ from 'jquery';
import 'slick-carousel/slick/slick';
import BaseController from './base-controller';

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
  }
}
