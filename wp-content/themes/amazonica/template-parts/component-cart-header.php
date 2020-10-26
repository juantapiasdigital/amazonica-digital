<div class="cart-product">
  <div class="cart-product-close">
    <div class="close-sidebar-cart">
      <i class="fas fa-times"></i>
    </div>
  </div>
  <div class="cart-product-header">
    <span>TU COMPRA</span>
    <span></span>
  </div>
  <?php
    global $woocommerce;
    $items = $woocommerce->cart->get_cart();
    foreach ($items as $item => $values) :
      $_product = wc_get_product($values['data']->get_id());
      $price = get_post_meta($values['product_id'], '_price', true);
      $image_id  = $_product->get_image_id();
      $image_url = wp_get_attachment_image_url($image_id, 'full');
      $total = $woocommerce->cart->get_cart_total();
      $remove_item = $woocommerce->cart->remove_cart_item( $_product );
      var_dump($remove_item);
    ?>
  <div class="cart-product-body">
      <div class="product-image">
        <img src="<?php echo $image_url; ?>" alt="<?php $_product->get_title(); ?>" class="img-fluid">
      </div>
      <div class="product-detail">
        <h4><?php echo $_product->get_title(); ?></h4>
        <a href="<?php echo $remove_item; ?>" class="remove-product">eliminar</a>
        <div class="quantity">
          <span class="less">-</span><input type="number" class="number" value="<?php echo $values['quantity']; ?>"><span class="more">+</span>
        </div>
      </div>
      <div class="product-price">
        <span> $<?php echo $price = get_post_meta($values['product_id'], '_price', true); ?></span>
      </div>
  </div>
  <?php endforeach; ?>
  <div class="total">
   <span class="total">Costo Total:</span>
   <span class="total-price"><?php echo $total; ?></span>
  </div>
  <div class="checkout">
      <a href="<?php echo wc_get_checkout_url() ?>" class="btn-checkout mx-auto my-4">Pagar</a>
  </div>
</div>