<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) {?>
        <div class="row m-0 footer-widget">
            <div class="container">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-12 col-md-3"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-12 col-md-3"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-12 col-md-3"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-4' )) : ?>
                        <div class="col-12 col-md-3"><?php dynamic_sidebar( 'footer-4' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
<?php }