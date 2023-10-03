<section class="press-releases-overview section-container">
	<div class="press-releases-overview__container">
		<ul class="press-releases-overview__listing">
		<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'post_type' => 'press-release',
			'orderby' => 'date',
			'order'   => 'DESC',
		);

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li class="press-releases-overview__listing-item">
				<article class="press-releases-overview__card card">
					<div class="press-releases-overview__card-container">

						<div class="press-releases-overview__img-container">
							<?php the_post_thumbnail('full', ['class' => 'press-releases-overview__thumbnail']); ?>
						</div>

						<div class="press-releases-overview__content-container">
							<div class="press-releases-overview__meta-tags">
								<small><i class="fas fa-calendar-alt"></i> <?php the_time('d.m.Y'); ?> / <i class="fas fa-user"></i> <?php the_author(); ?></small>
							</div>

							<h2 class="press-releases-overview__post-title"><?php the_title();?></h2>
							<p class="press-releases-overview__post-excerpt"><?php the_excerpt();?></p>
							<a class="press-releases-overview__btn-more btn" href="<?php the_permalink(); ?>">Bericht ansehen</a>
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
	<a href="<?php echo get_home_url(); ?>/press-releases">zur Press Release History</a>
</section>