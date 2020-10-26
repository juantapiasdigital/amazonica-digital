<?php

/**
 * flex content (ACF)
 * if you need create a new flex content you should go to ACF settings and created a new layout
 */
if (have_rows('content')) :
  while (have_rows('content')) : the_row();
    /**
     * layout to banner main 
     */
    if (get_row_layout() == 'banner_main') :
      get_template_part('template-parts/component', 'banner');
    endif;

    /**
     * layout to show categories by cards
     */
    if (get_row_layout() == 'category') :
      get_template_part('template-parts/component', 'category');
    endif;

    /**
     * layout to show products most selling
     */
    if (get_row_layout() == 'products') :
      get_template_part('template-parts/component', 'product');
    endif;

    /**
     * layout show subcategory
     */
    if (get_row_layout() == 'sub_category') :
      get_template_part('template-parts/component', 'sub-category');
    endif;

    /**
     * layout for our brands
     */
    if (get_row_layout() == 'our_brands') :
      get_template_part('template-parts/component', 'brand-carousel');
    endif;

  endwhile;
endif;
