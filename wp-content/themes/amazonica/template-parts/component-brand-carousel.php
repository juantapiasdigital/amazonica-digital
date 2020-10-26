<?php
$title = get_sub_field('brand_title');
$subtitle = get_sub_field('brand_subtitle');
?>
<section class="brands">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-4">
        <h2><?php echo $title; ?></h2>
        <p><?php echo $subtitle; ?></p>
      </div>
      <div class="col-12 col-md-8">
        <div class="owl-carousel owl-theme">
          <?php
          // Check rows exists.
          if (have_rows('brands')) :

            // Loop through rows.
            while (have_rows('brands')) : the_row();
              $brand = get_sub_field('brand_image');
              $brand_name = get_sub_field('brand_name');
          ?>
              <div class="item">
                <img src="<?php echo $brand; ?>" alt="<?php echo $brand_name; ?>" class="img-fluid">
              </div>
          <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>