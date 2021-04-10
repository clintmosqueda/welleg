import CONST from '../constants/index';
import { scrollAble } from "./scroll-able-lock";
import $ from 'jquery';

export default function closeModal(wrapper, modalEl, btn) {
  $(wrapper).on('click', btn, function() {
    $(modalEl).removeClass(CONST.OPEN_CLASS);
    history.back();
    scrollAble();
  });
}