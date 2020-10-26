<?php
$title = get_sub_field('product_title');
$button = get_sub_field('product_button');
?>
<section class="products">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center mb-5"><?php echo $title; ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="owl-carousel owl-theme">
          <?php
          $args = array(
            'post_type'      => 'product',
            'posts_per_page' => 10,
          );
          $loop = new WP_Query($args);

          while ($loop->have_posts()) : $loop->the_post();
            global $product;
          ?>
            <div class="item">
              <div class="card text-center">
                <div class="card-header">
                  <figure class="product-img">
                    <?php echo woocommerce_get_product_thumbnail(); ?>
                  </figure>
                  <h3><?php echo get_the_title(); ?></h3>
                </div>
                <div class="card-body">
                  <div class="quantity">
                    <span class="less">-</span><input type="number" class="number" value="0"><span class="more">+</span>
                  </div>
                  <a href="<?php echo get_permalink(); ?>" class="view-more"><i class="fas fa-eye"></i></a>
                </div>
                <div class="card-footer">
                  <div class="add-to-card">
                    <a href="">Agregar</a>
                  </div>
                  <div class="price">
                    <span>$<?php echo $product->price; ?></span>
                  </div>
                </div>
              </div>
            </div>
          <?php
          endwhile;
          wp_reset_query();
          ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="<?php echo $button['url']; ?>" class="btn-default mt-5 mx-auto"><?php echo $button['title']; ?></a>
      </div>
    </div>
  </div>
</section>