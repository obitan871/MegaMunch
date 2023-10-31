// Get the cart element at the header
const cart = document.querySelector('.cart');
const body = document.querySelector('body');

// Event listener for the cart button click
cart.addEventListener('click', () => {
  body.classList.toggle('show-cart-tab');
})

// Get the close button at the top of the cart tab
const cartCloseBtn = document.querySelector('.cart-close-btn');

// Event listener for the close button click
cartCloseBtn.addEventListener('click', () => {
  body.classList.remove('show-cart-tab');
})