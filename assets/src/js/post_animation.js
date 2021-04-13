let post_card = document.querySelector('#animated_card');
let book_icon = document.querySelector('#b_icon');


post_card.addEventListener('mouseover', () => {
  post_card.classList.add('animate_card');
  post_card.classList.remove('animate_card_out');
  book_icon.src = `${template_url}/assets/src/imgs/book_v003.png`;

})

post_card.addEventListener('mouseleave', () => {
  post_card.classList.add('animate_card_out');
  post_card.classList.remove('animate_card');
  book_icon.src = `${template_url}/assets/src/imgs/book_v002.png`;
})
