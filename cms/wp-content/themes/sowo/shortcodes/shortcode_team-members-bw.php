<section class="team-members section-container">
		<div class="team-members__container">
			<ul class="team-members__listing">
				<?php
				$args = array(
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post_type' => 'team-member',
					'team-category' => 'bw',
				);
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post();
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

					<li class="team-members__listing-item">
						<div class="team-members__card">

						<img class="team-members__img lazyload" src="<?php echo $featured_img_url; ?>">

							<div class="team-members__person">
								<p class="team-members__name"><?php the_title();?></p>
								<p class="team-members__role"><?php the_field('teammate_role');?></p>
								<p class="team-members__education"><?php the_field('teammate_education');?></p>
								<p class="team-members__motto">Motto: <?php the_field('teammate_motto');?></p>
							</div>

						</div>
					</li>
				<?php endwhile;
				wp_reset_postdata();
				?>
			</ul>
		</div>
</section>