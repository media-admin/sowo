<?php
/**
* Template Name: Single Post
*/
get_header(); ?>

			<div class="single-post__thumbnail-wrapper">
				<?php the_post_thumbnail('large', ['class' => 'single-post__thumbnail thumbnail--full']); ?>
			</div>

			<?php the_content(); ?>

			<div class="single-post__sidebar">
				<hr class="hr__single-post-sidebar hr__single-post-sidebar--before"/>
				<div class="single-post__sidebar-navigation">
					<div class="column is-half">
						<?php previous_post_link( '<small class="is-size-7 is-family-monospace has-text-grey">Zum vorherigen Beitrag</small><br><p class="link"><i class="fas fa-chevron-left"></i> %link</p>' ); ?>
					</div>

					<div class="column is-half has-text-right">
						<?php next_post_link( '<small class="is-size-7 is-family-monospace has-text-grey">Zum nächsten Beitrag</small><br><p class="link">%link <i class="fas fa-chevron-right"></i></p>' ); ?>
					</div>
				</div>
				<hr class="hr__single-post-sidebar hr__single-post-sidebar--after"/>
			</div>

	</div>
</main>

<?php get_footer(); ?>