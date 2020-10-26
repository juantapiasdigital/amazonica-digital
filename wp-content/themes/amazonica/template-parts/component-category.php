<section class="category">
  <div class="container">
    <div class="row justify-content-center">
      <?php
      if (have_rows('categories')) :
        while (have_rows('categories')) : the_row();
          $background = get_sub_field('category_background');
          $category_name = get_sub_field('category_name');
          $category_link = get_sub_field('category_link');
      ?>
          <div class="col-12 col-md-5">
            <a href="http://localhost/amazonica/">
              <div class="category-card" style="background: url('<?php echo $background; ?>') no-repeat center center; background-size: cover;">
                <div class="category-card-body">
                  <h3><?php echo $category_name; ?></h3>
                </div>
              </div>
            </a>
          </div>
      <?php
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section>