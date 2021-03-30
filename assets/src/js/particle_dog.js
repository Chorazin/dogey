// particle effects on hero banner pooch using html canvas

const canvas = document.getElementById('canvas1');
const cc = canvas.getContext('2d');
canvas.width = 800;
canvas.height = 450;

const image_one = new Image();
image_one.src = '';

image_one.addEventListener('load' => () {
  cc.drawImage(image_one, 0, 0, canvas.width/2, canvas.height/2);
})
