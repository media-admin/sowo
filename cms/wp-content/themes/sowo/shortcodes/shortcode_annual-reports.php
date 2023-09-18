<section class="annual-reports section-container">
		<div class="annual-reports__container">
			<ul class="annual-reports__listing">
				<?php
				$args = array(
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post_type' => 'annual-report',
				);
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post();
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

					<li class="annual-reports__listing-item">
						<div class="annual-reports__card">
							<a class="annual-reports__link" href="<?php the_field('report_link');?>" target="_blank">
								<img class="annual-reports__img lazyload" src="<?php echo $featured_img_url; ?>">
							</a>

							<div class="annual-reports__information">
								<a class="annual-reports__title-link" href="<?php the_field('report_link');?>" target="_blank">
									<p class="annual-reports__title"><?php the_title();?></p>
								</a>
								<p class="annual-reports__flip-book"><a href="<?php the_field('report_flip_book_url');?>" target="_blank">im Blättermodus öffnen</a></p>
								<p class="annual-reports__download"><a href="<?php the_field('report_link');?>" download target="_blank">Download [<?php the_field('report_pdf_size');?>]</a></p>
							</div>

						</div>
					</li>
				<?php endwhile;
				wp_reset_postdata();
				?>
			</ul>
		</div>
</section>