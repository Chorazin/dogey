let post_cards = document.querySelectorAll('div.card');
let post_card = document.querySelector('#test');
// let book_icon = document.querySelector('#b_icon');


console.log(post_cards);

post_cards.forEach((item) => {
  item.addEventListener('mouseover', () => {
    item.classList.add('animate_card');
    //item.classList.add('b_icon_animate');
    item.classList.remove('animate_card_out');
    //item.classList.remove('b_icon_animate_out');
  //  book_icon.src = `${template_url}/assets/src/imgs/book_v003.png`;


  })
})

post_cards.forEach((item) => {
  item.addEventListener('mouseleave', () => {
    item.classList.add('animate_card_out');
    //item.classList.add('b_icon_animate_out');
    item.classList.remove('animate_card');
    //item.classList.remove('b_icon_animate');
  //  book_icon.src = `${template_url}/assets/src/imgs/book_v002.png`;
  })
})


/*
post_card.addEventListener('mouseover', () => {
  post_card.classList.add('animate_card');
  post_card.classList.remove('animate_card_out');
  book_icon.src = `${template_url}/assets/src/imgs/book_v003.png`;
  book_icon.classList.add('b_icon_animate');
  book_icon.classList.remove('b_icon_animate_out');
})

post_card.addEventListener('mouseleave', () => {
  post_card.classList.add('animate_card_out');
  post_card.classList.remove('animate_card');
  book_icon.src = `${template_url}/assets/src/imgs/book_v002.png`;
  book_icon.classList.add('b_icon_animate_out');
  book_icon.classList.remove('b_icon_animate');
})
*/
