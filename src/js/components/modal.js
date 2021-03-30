import CONST from '../constants/index';
import { scrollAble, scrollLock } from "./scroll-able-lock";
import $ from 'jquery';

export default function modal(wrapper, target, overlay, btn) {
  $(wrapper).on('click', target, function(event) {
    event.preventDefault();
    console.log($(this));
    let nextEl = $(this).next();
    let href = $(this).attr('href');

    nextEl.toggleClass(CONST.OPEN_CLASS);
    history.pushState({ 'prevUrl': window.location.href }, '', href);
    if(nextEl.hasClass(CONST.OPEN_CLASS)) {
      scrollLock();
    }
    else {
      scrollAble();
    }
    console.log('the item was clicked');
  });

  $(wrapper).on('click', overlay, function() {
    console.log('here');
    $(this).parents('.js-modal').removeClass(CONST.OPEN_CLASS);
    history.back();
    scrollAble();
  });

  $(wrapper).on('click', btn, function() {
    console.log('here');
    $(this).parents('.js-modal').removeClass(CONST.OPEN_CLASS);
    history.back();
    scrollAble();
  });
}