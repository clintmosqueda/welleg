import $ from 'jquery';

export default function scrollHeader() {
  let position = $(window).scrollTop(); 

  $(window).scroll(function() {
      let scroll = $(window).scrollTop();
      
      if(scroll > position) {
        $('.js-hide-scroll').addClass('is-hidden');
      }
      else {
        $('.js-hide-scroll').removeClass('is-hidden');
      }
      position = scroll;
      if(scroll <= 0 || position <= 0) {
        $('.js-hide-scroll').removeClass('is-hidden');
      }
  });


  let ticking = false;
  let lastScrollLeft = 0;
  let doc = document.querySelector('html');
  let body = document.querySelector('body');
  let header = document.querySelector('.js-header');
  if(window.innerWidth > 767) {
    if(window.pageYOffset === 0) {
      header.style.cssText = `position: absolute; top: 0;`;
    }
  }
  else {
    header.removeAttribute('style');
  }

  window.addEventListener('scroll', () => {
    if(window.innerWidth > 767) {

      if (!ticking) {
        window.requestAnimationFrame(function() {
          let documentScrollLeft = doc.scrollLeft;
          let bodyScrollLeft = body.scrollLeft;
          if(lastScrollLeft !== bodyScrollLeft || lastScrollLeft !== documentScrollLeft) {
            header.style.cssText = `position: absolute; left: 0; right: 0;`;
            let scrollLimit = Math.abs(doc.getBoundingClientRect().left) + window.innerWidth;
            if(window.pageYOffset > 0 && scrollLimit === doc.scrollWidth) {
              header.style.cssText = `position: fixed; right: 0; left: auto;`;
            } else {
              header.style.cssText = `position: absolute; left: 0; right: 0; top: ${window.pageYOffset}px`;
            }
          } else {
            header.removeAttribute('style');
          }
          ticking = false;
        });

        ticking = true;
      }
    }
  });
  
}