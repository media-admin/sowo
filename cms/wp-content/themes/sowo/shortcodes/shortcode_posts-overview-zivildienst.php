<section class="zivildienst-overview section-container">
	<div class="zivildienst-overview__container">
		<ul class="zivildienst-overview__listing">
		<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'post_type' => 'post',
			'category_name' => 'zivildienst',
			'cat' => -1,
			'orderby' => 'date',
			'order'   => 'DESC',
		);

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li class="zivildienst-overview__listing-item">
				<article class="zivildienst-overview__card card">
					<div class="zivildienst-overview__card-container">

						<div class="zivildienst-overview__img-container">
							<?php the_post_thumbnail('full', ['class' => 'zivildienst-overview__thumbnail']); ?>
						</div>

						<div class="zivildienst-overview__content-container">
							<div class="zivildienst-overview__meta-tags">
								<small><i class="fas fa-calendar-alt"></i> <?php the_time('d.m.Y'); ?> / <i class="fas fa-user"></i> <?php the_author(); ?></small>
							</div>

							<h2 class="zivildienst-overview__post-title"><?php the_title();?></h2>
							<p class="zivildienst-overview__post-excerpt"><?php the_excerpt();?></p>
							<a class="zivildienst-overview__btn-more btn" href="<?php the_permalink(); ?>">zu den Details</a>
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
</section>