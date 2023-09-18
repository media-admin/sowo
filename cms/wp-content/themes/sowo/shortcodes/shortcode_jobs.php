<section class="jobs section-container">
	<?php
	$args = array(
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'post_type' => 'job',
	);
	$loop = new WP_Query( $args );

	$job_counter = $loop->found_posts;

	if ($job_counter > 0)  { ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post();?>
			<article class="jobs__container wrapper">
				<h2 class="jobs__title"><?php the_title();?></h2>
				<div class="jobs__summary">
					<?php the_content();?>
				</div>
				<h3 class="jobs__responsibilities-heading">Aufgabenbereiche</h2>
				<div class="jobs__responsibilities-content"><?php the_field('job_responsibilities');?></div>
				<h3 class="jobs__requirements-heading">Anforderungen</h3>
				<div class="jobs__requirements-content"><?php the_field('job_requirements');?></div>
				<h3 class="jobs__offer-heading">Wir bieten</h3>
				<div class="jobs__offer-content"><?php the_field('job_offer');?></div>
				<h3 class="jobs__start-heading">Dienstbeginn</h3>
				<div class="jobs__start-content"><?php the_field('job_start');?></div>
				<h3 class="jobs__provider-heading">Dienstgeber</h3>
				<div class="jobs__provider-content">
					<p class="jobs__provider"><?php the_field('job_provider');?></p>
					<p class="jobs__contact-person"><?php the_field('job_contact_person');?></p>
				</div>
				<a class="jobs__btn-application btn" href="mailto:office@sowo.at">Gleich jetzt bewerben</a>
				<hr class="jobs__divider" />
			</article>
		<?php endwhile;
		wp_reset_postdata();
		?>
		<?php } else {
			echo 'Aktuell haben wir keine freien Stellen zu vergeben.<br/>
			<div style="height:4rem" aria-hidden="true" class="wp-block-spacer"></div>';
		} ?>
</section>