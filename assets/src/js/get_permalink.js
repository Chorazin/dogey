function add_click(perma, counter) {

  if(counter == 1) {
    let card = document.querySelector(`div.posts div:nth-child(${counter})`);
    card.addEventListener('click', () => {
      window.location = perma
    })
  }
  else if(counter == 2) {
    let card_two = document.querySelector(`div.posts div:nth-child(${counter +1})`);
    card_two.addEventListener('click', () => {
      window.location = perma
    })
  }
  else if(counter == 3){
    let card_three = document.querySelector(`div.posts`).getElementsByTagName('div')[counter +5];
    card_three.addEventListener('click', () => {
      window.location = perma
    })
  }
}
