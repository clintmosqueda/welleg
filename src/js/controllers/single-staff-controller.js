import $ from 'jquery';
import 'slick-carousel/slick/slick';
import BaseController from './base-controller';

export default class SingleStaffController extends BaseController {
  init() {
    console.log('single-staff');
    $(document).ready(function() {
      $('.staff-related-members').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        variableWidth: true,
        cssEase: 'ease-out',
        speed: 500,
        dots: true,
        appendDots: $('.staff-related-slick-dots'),
        appendArrows: $('.staff-related-slick-nav')
      })
    })
    
  }
}