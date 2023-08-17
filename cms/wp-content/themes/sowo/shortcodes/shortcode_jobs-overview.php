<section class="jobs-overview section-container">

	<article class="wrapper">
		<div class="jobs-overview__container">
			<ul class="jobs-overview__listing">
				<?php
				$args = array(
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post_type' => 'job',
				);
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post();?>

					<li class="jobs-overview__listing-item">

						<div class="jobs-overview__card">

							<div class="jobs-overview__title-container">
								<p class="jobs-overview__title"><?php the_title();?></p>
							</div>

							<div class="jobs-overview__summary">
								<p class="jobs-overview__summary-details"><?php the_field('job_scope');?> / <?php the_field('job_start');?> / am Standort <?php the_field('job_location');?> </p>
							</div>

							<div class="jobs-overview__link-container">
								<a class="jobs-overview__link" href="<?php the_permalink($post);?>"><img class="site-header-top__contact-information-phone-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_job--blue.svg"/>zur Job Description</a>
							</div>

						</div>

					</li>
				<?php endwhile;
				wp_reset_postdata();
				?>
			</ul>
		</div>
	</article>

</section>