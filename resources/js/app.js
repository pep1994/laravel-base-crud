require('./bootstrap');

const targetUp = document.getElementById('up');

window.addEventListener('scroll', () => {
    // aletezza dell'intera pagina meno l'altezza della parte di finestra
    let scrollable = document.documentElement.scrollHeight - window.innerHeight;
    // altezza che scrolla la finestra
    let scrolled = window.scrollY;

    if (scrolled === scrollable) {
        targetUp.style.display = 'block';
    } 
    if (scrolled === 0) {
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



