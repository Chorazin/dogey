//fetch the nodelists required
let post_cards = document.querySelectorAll('div.card');
let book_icons = document.querySelectorAll('img.b_icon');

//setup foreach to iterate through post_cards taking in an index for the second nodelist book_icons
post_cards.forEach((card, index) => {
  //set icon to the current index of the forEach loop
  const icon = book_icons[index]

  card.addEventListener('mouseover', () => {
    card.classList.add('animate_card');
    card.classList.remove('animate_card_out');
    icon.classList.add('b_icon_animate');
    icon.classList.remove('b_icon_animate_out');
    icon.src = `${template_url}/assets/src/imgs/book_v003.png`;
  })

  card.addEventListener('mouseleave', () => {
    card.classList.add('animate_card_out');
    card.classList.remove('animate_card');
    icon.classList.remove('b_icon_animate');
    icon.classList.add('b_icon_animate_out');
    icon.src = `${template_url}/assets/src/imgs/book_v002.png`;
  })
})
