const nav = document.querySelector('nav');

let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  const currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    nav.classList.remove('hide-nav');
  } else {
    nav.classList.add('hide-nav');
  }
  prevScrollpos = currentScrollPos;
}



const blob = document.getElementById("blob");

window.onpointermove = event => { 
  const { pageX, pageY } = event;
  
  blob.animate({
    left: `${pageX}px`,
    top: `${pageY}px`
  }, { duration: 3000, fill: "forwards" });
}
