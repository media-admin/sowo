<section class="events-overview section-container">
	<div class="events-overview__container">
		<ul class="events-overview__listing">
		<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'post_type' => 'post',
			'category_name' => 'events',
			'cat' => -1,
			'orderby' => 'date',
			'order'   => 'DESC',
		);

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li class="events-overview__listing-item">
				<article class="events-overview__card card">
					<div class="events-overview__card-container">

						<div class="events-overview__img-container">
							<?php the_post_thumbnail('full', ['class' => 'events-overview__thumbnail']); ?>
						</div>

						<div class="events-overview__content-container">
							<div class="events-overview__meta-tags">
								<small><i class="fas fa-calendar-alt"></i> <?php the_time('d.m.Y'); ?> / <i class="fas fa-user"></i> <?php the_author(); ?></small>
							</div>

							<h2 class="events-overview__post-title"><?php the_title();?></h2>
							<p class="events-overview__post-excerpt"><?php the_excerpt();?></p>
							<a class="events-overview__btn-more btn" href="<?php the_permalink(); ?>">Beitrag lesen</a>
						</div>
					</div>
				</article>
			</li>
			<?php endwhile; ?>

			<?php
			wp_reset_postdata();
			?>
		</ul>
	</div>
	<a href="<?php echo get_home_url(); ?>/events">zum Events-Überblick</a>
</section>