<form id="order-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="hidden" id="orderData" name="orderData" value="">
      </form>

      <div class="order">
        <div class="order-items-header">
          <div class="order-item-header-description">Description</div>
          <div class="order-item-header-price">Price</div>
          <div class="order-item-header-quantity">Quantity</div>
          <div class="order-item-header-subtotal">Total</div>
          <div class="order-item-header-delete"></div>
        </div>
        <div class="order-items">
        </div>
        <div class="order-summary">
          <div class="order-summary-subtotal">
            <span>Subtotal: </span>
            <span class="order-summary-subtotal-num">0.0</span>
          </div>
          <div class="order-summary-tax">
            <span>Tax: </span>
            <span class="order-summary-tax-num">0.0</span>
          </div>
          <div class="order-summary-total">
            <span>Total: </span>
            <span class="order-summary-total-num">0.0</span>
          </div>
          <div class="order-summary-pay-this">
            <button class="order-summary-pay-this-btn">Place this Order</button>
          </div>
        </div>
      </div>
