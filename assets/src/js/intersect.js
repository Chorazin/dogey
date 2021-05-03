let options = {
  root: null, //the viewport
  rootMargin: '0px',
  threshold: 1
}

//grab what is to be observed
const target = document.querySelectorAll('.obs');
const circ = document.querySelectorAll('.circle_t');
const animation_array = [0, 0.25, 0.5, 0.75, 1, 1.25, 1.5, 1.75, 2]


//setup the observer
observer = new IntersectionObserver((entries, options) => {
  //add and remove animation as the observer intersects with the elements, in this case the viewport
  entries.forEach((entry) => {
    let random_number = Math.floor(Math.random() * 8) + 1;
    let array_number = animation_array[random_number]

    if(entry.intersectionRatio > 0) {
      if(entry.target.classList.contains('circle_t')) {
        entry.target.style.animation = `size_shift 0.5s forwards ease-out`;
      }
      else if(entry.target.classList.contains('inner_circle')) {
        entry.target.style.animation = `size_shift_down 0.5s forwards ease-out`;
      }
      else {
        entry.target.style.animation = `fade_in_down ${array_number}s forwards ease-out`;
      }
    }
    else {
      // causing a lot of repeat animation issues when animations are partly on screen and go out of intersection observer scope thus resetting over and over
      // so turing off the animation reset for when the observed target goes off and on screen
      // entry.target.style.animation = 'none';
    }
  })

})
//observe all .obs
target.forEach((targ) => {
  observer.observe(targ);
})
