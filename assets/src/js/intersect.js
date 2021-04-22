let options = {
  root: null, //the viewport
  rootMargin: '0px',
  threshold: 1
}

//grab what is to be observed
const target = document.querySelectorAll('.obs');

//setup the observer
observer = new IntersectionObserver((entries, options) => {
  //add and remove animation as the observer intersects with the elements, in this case the viewport
  entries.forEach((entry) => {
    if(entry.intersectionRatio > 0) {
      entry.target.style.animation = `fade_in_down 1s forwards ease-out`;
    }
    else {
      entry.target.style.animation = 'none';
    }
  })

})
//observe all span.mgr's
target.forEach((targ) => {
  observer.observe(targ);
})
