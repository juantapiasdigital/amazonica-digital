<?php
$title = get_sub_field('post_title');
$button = get_sub_field('post_button');
$upload_theme = get_template_directory_uri() . '/inc/assets/image/';
?>

<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center"><?php echo $title; ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="blog-carousel owl-carousel">
					<?php
					$args = array(
						'posts_per_page' => 5,
					);

					$blog = new WP_Query($args);
					if ($blog->have_posts()) :
						while ($blog->have_posts()) : $blog->the_post();
							$background = get_the_post_thumbnail_url()
					?>

							<div class="item" data-post="<?php the_ID(); ?>" style="background: url('<?php echo $background; ?>') no-repeat center center; background-size: cover; ">
								<a href="<?php the_permalink(); ?>" class="post-item">
									<h5><?php the_title(); ?></h5>
									<?php the_excerpt(); ?>
									<i class="fas fa-eye"></i>
								</a>
							</div>
					<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php ?>
			</div>
		</div>
	</div>
</section>