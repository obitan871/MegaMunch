localStorage = window.localStorage;
var cartData = JSON.parse(localStorage.getItem("cartData"));

const cartAmt = document.getElementById('cart-amount');

const refreshSummary = () => {
  let subtotal = 0;
  cartData.forEach((e) => {
    subtotal += e.price * e.quantity;
  });
  subtotal = Math.round(subtotal * 100)/100;

  let tax = subtotal * 0.12;
  tax = Math.round(tax * 100)/100;

  let total = subtotal + tax;
  total = Math.round(total * 100)/100;

  const sumSubtotal = document.querySelector('.order-summary-subtotal-num');
  sumSubtotal.innerText = subtotal;

  const sumTax = document.querySelector('.order-summary-tax-num');
  sumTax.innerText = tax;

  const sumTotal = document.querySelector('.order-summary-total-num');
  sumTotal.innerText = total;
};

const orderItems = document.querySelector(".order-items");
if (cartData != null) {
  cartData.forEach((e) => {
    let newItem = document.createElement('div');
    newItem.classList.add('order-item');
    newItem.dataset.id = e.id;
    let subtotal = Math.round(Number(e.quantity) * Number(e.price) * 100)/100;

    newItem.innerHTML = `
      <img src="${e.image}">
      <div class="order-item-name">${e.name}</div>
      <div class="order-item-price">${e.price}</div>
      <div class="order-item-quantity">
        <span class="order-item-quantity-minus">-</span>
        <span class="order-item-quantity-num">${e.quantity}</span>
        <span class="order-item-quantity-add">+</span>
      </div>
      <div class="order-item-subtotal">${subtotal}</div>
      <div class="order-item-delete">
        <span class="material-symbols-outlined">delete</span>
      </div>
    `;

    orderItems.appendChild(newItem);

    // Event handler for decreasing quantity
    const quantityMinus = newItem.querySelector('.order-item-quantity-minus');
    quantityMinus.addEventListener('click', () => {
      let quantityNum = newItem.querySelector('.order-item-quantity-num');
      let num = Number(quantityNum.innerText);
      if (num > 1) {
        // Decrease the quantity
        num--;

        // Update the cart data
        cartData.forEach((e) => {
          if (e.id == newItem.dataset.id) {
            e.quantity = num;
            return;
          }
        });

        localStorage.setItem("cartData", JSON.stringify(cartData));

        // Update the entry in the order table
        quantityNum.innerText = num;

        let subtotal = newItem.querySelector('.order-item-subtotal');
        subtotal.innerText = Math.round(Number(e.price) * num * 100)/100;

        // Refresh the summary in the order table
        refreshSummary();

        // Update the shopping cart in the sidebar
        addToCart(e.id, e.image, e.name, e.price, -1);
      }
    })

    // Event handler for increasing quantity
    const quantityAdd = newItem.querySelector('.order-item-quantity-add');
    quantityAdd.addEventListener('click', () => {
      let quantityNum = newItem.querySelector('.order-item-quantity-num');
      let num = Number(quantityNum.innerText);

      // Increase the quantity
      num++;

      cartData.forEach((e) => {
        if (e.id == newItem.dataset.id) {
          e.quantity = num;
          return;
        }
      });

      localStorage.setItem("cartData", JSON.stringify(cartData));

      // Update the entry in the order table
      quantityNum.innerText = num;

      let subtotal = newItem.querySelector('.order-item-subtotal');
      subtotal.innerText = Math.round(Number(e.price) * num * 100)/100;

      // Refresh the summary
      refreshSummary();

      // Update the shopping cart in the sidebar
      addToCart(e.id, e.image, e.name, e.price, 1);
    });

    // Event handler for deletion
    const orderItemDelete = newItem.querySelector('.order-item-delete');
    orderItemDelete.addEventListener('click', () => {
      let quantityNum = newItem.querySelector('.order-item-quantity-num');
      let num = Number(quantityNum.innerText);

      // Update the cart data
      let idx = cartData.findIndex(e => e.id == newItem.dataset.id);
      cartData.splice(idx, 1);

      localStorage.setItem("cartData", JSON.stringify(cartData));

      // Update order list
      orderItems.removeChild(orderItemDelete.parentNode);

      // Refresh the summary
      refreshSummary();

      // Update the shopping cart in the sidebar
      addToCart(e.id, e.image, e.name, e.price, -num);
    });
  });

  refreshSummary();
}

const payThis = document.querySelector('.order-summary-pay-this-btn');
if (payThis != null) {
  payThis.addEventListener('click', () => {
    const orderData = document.getElementById("orderData");
    orderData.value = JSON.stringify(cartData);
  
    document.getElementById("order-form").submit();
  });
}