// Get the shopping cart button in the header
const cartBtn = document.querySelector('.cart');
const body = document.querySelector('body');

// Toggle the class 'show-cart-tab' on the body element to
// show/hide the cart tab
cartBtn.addEventListener('click', () => {
  body.classList.toggle('show-cart-tab');
})

// Get the close button at the top of the cart tab
const cartCloseBtn = document.querySelector('.cart-close-btn');

// Close the cart tab when the close button is clicked
// by removing the 'show-cart-tab' class to hide the cart tab
cartCloseBtn.addEventListener('click', () => {
  body.classList.remove('show-cart-tab');
})

const cartItems = document.querySelector('.cart-items');

// Function to add a product item to the shopping cart
const addToCart = (id, image, name, price, quantity) => {

  // Update cart icon at the header menu
  const cartAmt = document.getElementById('cart-amount');
  // Update the cart amount by adding the quantity of the newly added item
  cartAmt.innerText = quantity + Number(cartAmt.innerText);

  // Check if the shopping cart already has the item
  for (let j = 0; j < cartItems.children.length; j++) {
    let cartItem = cartItems.children[j];
    if (id == cartItem.dataset.id) {
      let cartItemProps = cartItem.children;

      // Update the quantity if the item is already in the cart
      cartItemProps[3].children[1].innerText =
        quantity + Number(cartItemProps[3].children[1].innerText);
      
      return;  // Exit the function as the item was found in the cart
    }
  }

  // Create a new item and add it to the cart
  let newItem = document.createElement('div');
  newItem.classList.add('cart-item');
  newItem.dataset.id = id;
  newItem.innerHTML = `
    <img src="${image}" class="cart-item-img">
    <div class="cart-item-name">${name}</div>
    <div class="cart-item-price">${price}</div>
    <div class="cart-item-quantity">
      <span class="cart-item-quantity-minus">-</span>
      <span class="cart-item-quantity-num">${quantity}</span>
      <span class="cart-item-quantity-add">+</span>
    </div>
    <div class="cart-item-delete"><span class="material-symbols-outlined">delete</span></div>
  `;
  cartItems.appendChild(newItem);

  // Event handler for decreasing quantity
  const quantityMinus = newItem.querySelector('.cart-item-quantity-minus');
  quantityMinus.addEventListener('click', () => {
    let quantityNum = newItem.querySelector('.cart-item-quantity-num');
    num = Number(quantityNum.innerText);
    if (num > 1) {
      // Decrease the quantity and update the cart amount
      num--;
      quantityNum.innerText = num;

      cartAmt.innerText = Number(cartAmt.innerText) - 1;
    }
  });

  // Event handler for increasing quantity
  const quantityAdd = newItem.querySelector('.cart-item-quantity-add');
  quantityAdd.addEventListener('click', () => {
    let quantityNum = newItem.querySelector('.cart-item-quantity-num');
    num = Number(quantityNum.innerText);

    // Increase the quantity and update the cart amount
    num++;
    quantityNum.innerText = num;

    cartAmt.innerText = Number(cartAmt.innerText) + 1;
  });

  // Event handler for deleting item
  const cartItemDelete = newItem.querySelector('.cart-item-delete');
  cartItemDelete.addEventListener('click', () => {
    let quantityNum = newItem.querySelector('.cart-item-quantity-num');
    num = Number(quantityNum.innerText)

    // Decrease the cart amount and remove the item from the cart
    cartAmt.innerText = Number(cartAmt.innerText) - num;
    cartItems.removeChild(newItem);
  });
};

// For the 'add to cart' buttons in the category page, find and initialize
// event listeners
const itemAddToCartBtns = document.querySelectorAll('.item-addtocart-btn');

// If 'add to cart' buttons are found, add event listeners to each
if (itemAddToCartBtns !== null) {
  for (let i = 0; i < itemAddToCartBtns.length; i++) {
    itemAddToCartBtns[i].addEventListener('click', function (e) {
      let item = this.parentNode;
      let id = item.dataset.id;

      let props = item.children;

      let image = props[0].children[0].src;
      let name = props[1].innerText;
      let price = Number(props[2].innerText);
      let quantity = Number(props[3].children[0].value);

      // Call the 'addToCart' function to add the item to the cart
      addToCart(id, image, name, price, quantity);
    })
  }
}

// Retrieve the 'add to cart' button element in product page
const productAddToCartBtn = document.querySelector('.product-addtocart-btn');

if (productAddToCartBtn !== null) {
  productAddToCartBtn.addEventListener('click', function (e) {
    let item = this.parentNode;
    let id = item.dataset.id;

    let props = item.children;

    let image = props[0].children[0].src;
    let name = props[1].children[0].innerText;
    let price = Number(props[2].innerText);
    let quantity = Number(props[3].children[1].value);

    // Call the 'addToCart' function to add the item to the cart
    addToCart(id, image, name, price, quantity);
  })
}