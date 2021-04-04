import Dotdotdot from 'dotdotdot-js';

export default function dotdotdot() {
  document.addEventListener( "DOMContentLoaded", () => {
    let trimTitle = document.querySelectorAll('.js-post-heading');

    if(trimTitle) {
      let optionTitle = {
        ellipsis: '...',
        truncate: 'letter',
        watch: true,
      };
      
      trimTitle.forEach( el => {
        new Dotdotdot( el, optionTitle );
      })  
    }
  });
}