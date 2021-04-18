import $ from 'jquery';
import 'slick-carousel/slick/slick';
import BaseController from './base-controller';
import dotdotdot from '../components/dotdotdot';

export default class SingleStaffController extends BaseController {
  init() {
    console.log('single-staff');
    $(document).ready(function() {
      let $staffRelated = $('.staff-related')
      let $staffMember = $('.staff-related-members')
      $staffMember.slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        variableWidth: true,
        cssEase: 'ease-out',
        slidesToShow: 3,
        speed: 500,
        dots: true,
        appendDots: $('.staff-related-slick-dots'),
        appendArrows: $('.staff-related-slick-nav')
      })

      $staffMember.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        $staffRelated.addClass('is-autoPlay')
      })


    })
    
    dotdotdot();
  }
}