<?php

get_header(); ?>

		<section class="posts-overview section-container">
			<div class="posts-overview__container">
				<ul class="posts-overview__listing">
				<?php
				$args = array(
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post_type' => 'post',
					'category_name' => 'projekte',
					'orderby' => 'date',
					'order'   => 'DESC',
				);

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li class="posts-overview__listing-item">
						<article class="posts-overview__card card">
							<div class="posts-overview__card-container">

								<div class="posts-overview__img-container">
									<?php the_post_thumbnail('full', ['class' => 'posts-overview__thumbnail']); ?>
								</div>

								<div class="posts-overview__content-container">
									<div class="posts-overview__meta-tags">
										<small><i class="fas fa-calendar-alt"></i> <?php the_time('d.m.Y'); ?> / <i class="fas fa-user"></i> <?php the_author(); ?></small>
									</div>

									<h2 class="posts-overview__post-title"><?php the_title();?></h2>
									<p class="posts-overview__post-excerpt"><?php the_excerpt();?></p>
									<a class="posts-overview__btn-more btn" href="<?php the_permalink(); ?>">Beitrag lesen</a>
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



		</div>
	</div>
</main>

<?php get_footer(); ?>





