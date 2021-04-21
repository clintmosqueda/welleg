import $ from 'jquery';
import 'jquery.marquee';

export default function marquee() {
  let marques = $('.marquee')
  if(marques) {
    marques.marquee({
      //duration in milliseconds of the marquee
      duration: 18000,
      //gap in pixels between the tickers
      gap: 20,
      //time in milliseconds before the marquee will start animating
      delayBeforeStart: 1100,
      //'left' or 'right
      direction: 'left',
      //true or false - should the marquee be duplicated to show an effect of continues flow
      duplicated: true,
      startVisible: true
    });
  }
}