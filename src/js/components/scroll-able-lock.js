const IS_SCROLLABLE = 'is-scrollable',
    wrap = document.querySelector('.js-wrap');

let scrollTop = null;
export const ableScroll = () => {
   wrap.classList.remove(IS_SCROLLABLE);
   wrap.removeAttribute('style')
   window.scrollTo(0, scrollTop);
 }

export const lockScroll = () => {
  scrollTop = window.pageYOffset;
  wrap.style.top = `-${scrollTop}px`;
  wrap.classList.add(IS_SCROLLABLE);
}

export function scrollAble() {
  ableScroll();
}

export function scrollLock() {
  lockScroll();
}
