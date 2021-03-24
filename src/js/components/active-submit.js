export default function activeSubmit() {
  let trigger = document.querySelector('.js-check-trigger')
  let button = document.querySelector('.js-form-submit')
  
  trigger.addEventListener('click', function() {
    // if(button.classList.contains('is-active')) {
    //   button.classList.remove('is-active')
    //   console.log('true');
    // } else {
      button.classList.add('is-active')
      console.log('false');
    // }
  })
}