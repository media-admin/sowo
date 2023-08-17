<div class="news-posts__container wrapper">

	<?php

	$args = array(
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'post_type' => 'post',
		'category_name' => 'neuheiten',
	);

	$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<article class="news-posts__card card">
				<a href="<?php the_permalink(); ?>">
					<div class="card__container wrapper">
						<p class="news-posts__pretitle card__pretitle"><?php the_field('post-pretitle');?></p>
						<h3 class="news-posts__title featured-posts__title card__title"><?php the_title();?></h3>
						<p class="news-posts__subtitle card__subtitle"><?php the_field('post-subtitle');?></p>
						<div class='dotted line--dotted card__line--dotted'></div>
						<?php the_post_thumbnail('full', ['class' => 'featured-posts__thumbnail card__thumbnail']); ?>
						<div class="news-posts__content card__content">
							<?php the_excerpt();?>
						</div>
					</div>
				</a>
			</article>

	<?php endwhile; ?>

	<?php
	wp_reset_postdata();
	?>

</div>