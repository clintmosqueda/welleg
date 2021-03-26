import CONST from '../constants/index';
import $ from 'jquery';

export default function accordion() {
  $('.js-accordion-trigger').on('click', function(){
    if($(this).hasClass(CONST.ACTIVE_CLASS)) {
      $(this).parents('.js-accordion').removeClass(CONST.OPEN_CLASS)
      $(this).next().slideUp()
      $(this).removeClass(CONST.ACTIVE_CLASS)
      console.log('addd');
    } else {
      $('.js-accordion').removeClass(CONST.OPEN_CLASS)
      $('.js-accordion-wrap').slideUp()
      $('.js-accordion-trigger').removeClass(CONST.ACTIVE_CLASS)
      
      $(this).parents('.js-accordion').addClass(CONST.OPEN_CLASS)
      $(this).next().slideDown();
      $(this).addClass(CONST.ACTIVE_CLASS)
      console.log('asdadasdfad');
    }
  })
}