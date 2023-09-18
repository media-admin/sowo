<section div class="partner-overview">
	<div class="partner-overview__container wrapper">
			<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'post_type' => 'partner',
			'partner-category' => 'presse',
			'orderby' => 'title',
			'order'   => 'ASC',
		);

		$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="partner-overview__card">
					<a class="partner-overview__link" href="<?php the_field('partner_url');?>" target="_blank">
						<?php the_post_thumbnail('full', ['class' => 'partner-overview__logo-img']); ?>
					</a>
				</div>
		<?php endwhile; ?>

		<?php
		wp_reset_postdata();
		?>

	</div>
</section>