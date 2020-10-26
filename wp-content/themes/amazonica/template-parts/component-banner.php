<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="owl-carousel owl-theme">
          <?php
          // Check rows exists.
          if (have_rows('banner_carousel')) :
            // Loop through rows.
            while (have_rows('banner_carousel')) : the_row();
              $item_carousel = get_sub_field('item_carousel_image');
          ?>
              <div class="item">
                <figure class="banner-img">
                  <img src="<?php echo $item_carousel; ?>" alt="Amazonica Bela" class="img-fluid">
                </figure>
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