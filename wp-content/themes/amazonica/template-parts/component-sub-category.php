<?php
$title = get_sub_field('sub_category_title');
$button = get_sub_field('sub_category_button');
?>
<section class="sub-category">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center"><?php echo $title; ?></h2>
        <a href="<?php echo $button['url']; ?>" class="btn-default mx-auto my-5"><?php echo $button['title']; ?></a>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php
      // Check rows exists.
      if (have_rows('sub_categories_items')) :

        // Loop through rows.
        while (have_rows('sub_categories_items')) : the_row();
          $background = get_sub_field('sub_categories_background');
          $category_name = get_sub_field('sub_categoies_name');
          $category_link = get_sub_field('sub_categories_link');
      ?>
          <div class="col-12 col-md-3">
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