<section class="contact-person section-container">
		<div class="contact-person__container">
			<ul class="contact-person__listing">
				<?php
				$args = array(
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post_type' => 'team-member',
					'team-category' => 'bw-kontaktperson',
				);
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post();
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

					<li class="contact-person__listing-item">
						<div class="contact-person__card">

						<img class="contact-person__img lazyload" src="<?php echo $featured_img_url; ?>">

							<div class="contact-person__person">
								<p class="contact-person__name"><?php the_title();?></p>
								<p class="contact-person__role"><?php the_field('teammate_contact_role');?></p>
								<p class="contact-person__phone"><a href="tel:<?php the_field('teammate_phone');?>"><?php the_field('teammate_phone');?></a></p>
								<p class="contact-person__email"><a href="mailto:<?php the_field('teammate_email');?>"><?php the_field('teammate_email');?></a></p>
							</div>

						</div>
					</li>
				<?php endwhile;
				wp_reset_postdata();
				?>
			</ul>
		</div>
</section>