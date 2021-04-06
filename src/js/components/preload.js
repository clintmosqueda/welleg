import createjs from 'preload-js';

export default function preload() {
  const baseUrl = document.querySelector('#base-url').value + '/wp-content/themes/welleg/assets/images/';
  const preload = document.querySelector('.js-preload');
  const wrap = document.querySelector('.js-wrap');
  const banner = document.querySelector('.js-banner');
  let queue = new createjs.LoadQueue();

  queue.on('complete', onComplete);
  queue.on('progress', onProgress);
  queue.loadManifest([
    { src: baseUrl +'banner-img.jpg'},
    { src: baseUrl +'aim-img1.jpg'},
    { src: baseUrl +'aim-img1-sp.jpg'},
    { src: baseUrl +'aim-img2.jpg'},
    { src: baseUrl +'aim-img2-sp.jpg'},
    { src: baseUrl +'vision-img.jpg'},
    { src: baseUrl +'vision-img-sp.jpg'},
    { src: baseUrl +'about-img1.png'},
    { src: baseUrl +'about-img2.png'},
    { src: baseUrl +'about-img3.png'},
    { src: baseUrl +'footer-img.png'}
  ]);

  function onComplete() { 
    wrap.classList.remove('is-loading');
    preload.classList.remove('is-loading');
    setTimeout(() => {
      banner.classList.add('is-active');
    }, 350);    
  }

  function onProgress(event) {
    let progress = Math.round(event.loaded * 100);
    console.log(event.loaded.toFixed(1));
    // console.log(progress);
    // if(progress >= 70) { 
    //   $('.loading-smile').removeClass('is-shake');
    // }
  }

}