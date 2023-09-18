<?php
/**
* Template Name: Single Press Release
*/
get_header(); ?>

	<?php
		global $post;
		$content = apply_filters('the_content',$post->post_content);
	?>

			<div class="press-release__thumbnail-wrapper">
				<?php the_post_thumbnail('large', ['class' => 'press-release__thumbnail thumbnail--full']); ?>
			</div>

			<?php the_content(); ?>

			<div class="press-release__sidebar">
				<hr class="hr__press-release-sidebar hr__press-release-sidebar--before"/>
				<div class="press-release__sidebar-navigation">
					<div class="column is-half">
						<?php previous_post_link( '<small class="is-size-7 is-family-monospace has-text-grey">Zum vorherigen Press Release</small><br><p class="link"><i class="fas fa-chevron-left"></i> %link</p>' ); ?>
					</div>

					<div class="column is-half has-text-right">
						<?php next_post_link( '<small class="is-size-7 is-family-monospace has-text-grey">Zum nächsten Press Release</small><br><p class="link">%link <i class="fas fa-chevron-right"></i></p>' ); ?>
					</div>
				</div>
				<hr class="hr__press-release-sidebar hr__press-release-sidebar--after"/>
			</div>

		</div>
	</main>

<?php get_footer(); ?>