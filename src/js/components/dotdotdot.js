import Dotdotdot from 'dotdotdot-js';

export default function dotdotdot() {
  let trimTitle = document.querySelectorAll(".member-heading");

  if(trimTitle) {
    let optionTitle = {
      ellipsis: '...',
      truncate: 'letter'
    };
    
    trimTitle.forEach( el => {
      new Dotdotdot( el, optionTitle );
    })
  }
}