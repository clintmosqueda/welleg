export default function scrollHeader() {
  let scrollPos = 0;
  let el = document.querySelector('.js-hide-scroll');

  window.addEventListener('scroll', function(){
    if ((document.body.getBoundingClientRect()).top > scrollPos) {
      el.classList.remove('scroll-down');
      el.classList.add('scroll-up');
    }
    else {
      el.classList.remove('scroll-up');
      el.classList.add('scroll-down');
    }
    scrollPos = (document.body.getBoundingClientRect()).top;
  });
}