<!-- Add search panel -->
<div class="search-panel">
  <?php echo get_search_form() ?>
  <div class="cart-container">
    <a class="shopping-cart" href="<?php echo wc_get_cart_url(); ?>">
      <i class="fa fa-2x fa-shopping-cart"></i>
      <span>Giỏ hàng (<?php echo WC()->cart->get_cart_contents_count(); ?>)</span>
    </a>
  </div>
</div>