<section div class="sponsors-overview">
	<div class="sponsors-overview__container wrapper">
			<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'post_type' => 'sponsor',
			'orderby' => 'title',
			'order'   => 'ASC',
		);

		$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="sponsors-overview__card">
					<a class="sponsors-overview__link" href="<?php the_field('sponsors_url');?>" target="_blank">
						<?php the_post_thumbnail('full', ['class' => 'sponsors-overview__logo-img']); ?>
					</a>
				</div>
		<?php endwhile; ?>

		<?php
		wp_reset_postdata();
		?>

	</div>
</section>