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
      //console.log(scroll,position);
      position = scroll;
      //console.log(scroll,position);
      if(scroll === 0 || position === -1) {
        $('.js-hide-scroll').removeClass('is-hidden');
      }
  });
  
}