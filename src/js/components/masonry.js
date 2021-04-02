import Isotope from 'isotope-layout';
import imagesLoaded from 'imagesloaded';

export default function masonry() {
  let grid = document.querySelector('.js-about-sdg-news-list');
  let iso;

  imagesLoaded( grid, function() {
    // init Isotope after all images have loaded
    iso = new Isotope( grid, {
      itemSelector: '.about-sdg-block',
      percentPosition: true,
      masonry: {
        columnWidth: 460,
        gutter: '.gutter-sizer',
        horizontalOrder: true,
        fitWidth: true,
      }
    });
  });

  
}