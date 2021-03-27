import CONST from '../constants/index';
import $ from 'jquery';

export default function accordion() {
  $('.js-accordion-trigger').on('click', function(){
    let indx = $(this).parents('.js-animateIn').index()
    console.log(indx);
    if($(this).hasClass(CONST.ACTIVE_CLASS)) {
      $(this).parents('.js-accordion').removeClass(CONST.OPEN_CLASS)
      $(this).next().slideUp()
      $(this).removeClass(CONST.ACTIVE_CLASS)
    } else {
      $('html, body').animate({
        scrollTop: $('.position').offset().top + (indx * 141) 
      }, 400);

      $('.js-accordion').removeClass(CONST.OPEN_CLASS)
      $('.js-accordion-wrap').slideUp()
      $('.js-accordion-trigger').removeClass(CONST.ACTIVE_CLASS)

      $(this).parents('.js-accordion').addClass(CONST.OPEN_CLASS)
      $(this).next().slideDown();
      $(this).addClass(CONST.ACTIVE_CLASS)
    }
  })
}