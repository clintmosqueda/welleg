import CONST from '../constants/index';
import { scrollAble } from "./scroll-able-lock";

export default function closeModal(modalEl, btn) {
  let modal = document.querySelectorAll(modalEl);
  let sdgSingleBtn = document.querySelector(btn);
  modal.forEach((item, index) => {
    let button = item.querySelector(btn);
    button.addEventListener('click', () => {
      item.classList.remove(CONST.OPEN_CLASS);
      history.back();
      scrollAble();
    })
  })
}