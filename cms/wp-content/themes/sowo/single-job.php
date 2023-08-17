<?php
/**
* Template Name: Job
*/

get_header(); ?>

	<?php
		global $post;
		$content = apply_filters('the_content',$post->post_content);
	?>

	<section class="single-job">
		<div class="single-job__summary">
			<p class="single-job__summary-details"><?php the_field('job_scope');?> / <?php the_field('job_start');?> / am Standort <?php the_field('job_location');?> </p>
		</div>

		<h2 class="single-job__who-we-are-heading">Wer wir sind</h2>
		<div class="single-job__who-we-are-content"><?php the_field('job_who_we_are');?></div>

		<h2 class="single-job__daily-business-challenge-heading">Daily Business & Challenge</h2>
		<div class="single-job__daily-business-challenge-content"><?php the_field('job_daily_business_challenge');?></div>

		<div class="single-job__img-container">
			<img
				class="single-job__img"
				src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/EP_20230329__DSC9576_web.jpg"
				alt="EPICON Teambesprechung"
			/>
		</div>

		<h2 class="single-job__perfect-match-heading">Perfect Match</h2>
		<div class="single-job__perfect-match-content"><?php the_field('job_perfect_match');?></div>

		<h2 class="single-job__what-you-can-expect-heading">What you can expect</h2>
		<div class="single-job__what-you-can-expect-content"><?php the_field('job_what_you_can_expect');?></div>

		<a class="single-job__btn-application btn" href="/kontakt#bewerbungsformular">Zum Bewerbungsformular</a>

	</section>

	</div>
	</div>
</main>

<?php get_footer(); ?>