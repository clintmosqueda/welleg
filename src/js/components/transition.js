export default function transition() {
  window.addEventListener('load', (e) => {
    const animateIn = document.querySelectorAll('.js-animateIn')
    let settings = {
      rootMargin: '0px 0px 0px 0px',
      threshold: 0.25
    }
  
    let animateInObserver = new IntersectionObserver(cardCallBack, settings)
  
    animateIn.forEach((animateIn) => {
      animateInObserver.observe(animateIn)
    })
  
    function cardCallBack(cards) {
      cards.forEach((card) => {
        if (card.isIntersecting) {
          card.target.classList.remove('is-hidden')
        }
      })
    }
  })
}