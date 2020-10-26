<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php

    // WordPress 5.2 wp_body_open implementation
    if (function_exists('wp_body_open')) {
        wp_body_open();
    } else {
        do_action('wp_body_open');
    }

    //directory img
    $upload_theme = get_template_directory_uri() . '/inc/assets/image/';

    ?>

    <div id="page" class="site">
        <header class="site-header fixed-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-11">
                        <div class="navbar-brand">
                            <?php if (get_theme_mod('wp_bootstrap_starter_logo')) : ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo esc_url(get_theme_mod('wp_bootstrap_starter_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="img-fluid">
                                </a>
                            <?php else : ?>
                                <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_url(bloginfo('name')); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="nav-cart">
                            <img src="<?php echo $upload_theme; ?>cart.png" alt="Add to cart" class="img-fluid">
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-xl p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'main-nav',
                        'container_class' => 'collapse navbar-collapse justify-content-center',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav',
                        'depth'           => 3,
                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        'walker'          => new wp_bootstrap_navwalker()
                    ));
                    ?>
                </nav>
            </div>
        </header><!-- #masthead -->
        <?php
            get_template_part('template-parts/component', 'cart-header');
        ?>