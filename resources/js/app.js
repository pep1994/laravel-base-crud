require('./bootstrap');

const targetUp = document.getElementById('up');
let navHeight = document.querySelector('header').scrollHeight;

window.addEventListener('scroll', () => {
    let scrolled = window.scrollY;

    if (scrolled > navHeight + 200) {
        targetUp.style.display = 'block';
    } else {
        targetUp.style.display = 'none';
    }
  })

  targetUp.addEventListener('click', ()=>{
      window.scrollTo({
          top: 0,
          left: 0,
          behavior: 'smooth'
      })
  })



