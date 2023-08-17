<?php

function shortcode_team_members() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_team-members');
	return ob_get_clean();
}

add_shortcode( 'shortcode_team_members', 'shortcode_team_members' );


function shortcode_news_posts() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_posts-news');
	return ob_get_clean();
}

add_shortcode( 'shortcode_news_posts', 'shortcode_news_posts' );


function shortcode_partner_overview() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_partner-overview');
	return ob_get_clean();
}

add_shortcode( 'shortcode_partner_overview', 'shortcode_partner_overview' );


function shortcode_partner_slider() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_partner-slider');
	return ob_get_clean();
}

add_shortcode( 'shortcode_partner_slider', 'shortcode_partner_slider' );


function shortcode_jobs_overview() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_jobs-overview');
	return ob_get_clean();
}

add_shortcode( 'shortcode_jobs_overview', 'shortcode_jobs_overview' );


function shortcode_jobs_overview_1_3() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_jobs-overview-1-3');
	return ob_get_clean();
}

add_shortcode( 'shortcode_jobs_overview_1_3', 'shortcode_jobs_overview_1_3' );


function shortcode_jobs_overview_4_plus() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_jobs-overview-4-plus');
	return ob_get_clean();
}

add_shortcode( 'shortcode_jobs_overview_4_plus', 'shortcode_jobs_overview_4_plus' );


function shortcode_google_maps() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_google-maps');
	return ob_get_clean();
}

add_shortcode( 'shortcode_google_maps', 'shortcode_google_maps' );


function shortcode_youtube_video() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_youtube-video');
	return ob_get_clean();
}

add_shortcode( 'shortcode_youtube_video', 'shortcode_youtube_video' );



function show_tags()
{
	$post_tags = get_the_tags();
	$separator = ' | ';
	if (!empty($post_tags)) {
		foreach ($post_tags as $tag) {
			$output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
		}
		return trim($output, $separator);
	}
}



function all_posts_shortcode() {

	// Parameter für Posts
	$args = array(
		'category' => '',
		'numberposts' => 6,
		'post_status' => 'publish',
		'orderby'   => 'id',
		'order' => 'ASC',
	);

	//Posts holen
	$posts = get_posts($args);

	//Inhalte sammeln
	$content = '';
	foreach ($posts as $post) {

		$content .= '<div class="card column is-one-third">';
		$content .= '<div class="card-image">';
		$content .= '<a class="" href="'.get_permalink($post->ID).'">';
		$content .= '<figure class="image">';
		$content .= '<img  alt="Beitragsbild" src="'.get_the_post_thumbnail_url($post->ID, 'full').'"';
		$content .= '</figure>';
		$content .= '</a>';
		$content .= '</div>';
		$content .= '<div class="card-content">';
		$content .= '<div class="media">';
		$content .= '<div class="media-content">';
		$content .= '<p class="author is-6">Veröffentlicht am <span class="meta__date-published"><time datetime="d.m.Y">'.get_post_time('d.m.Y', $post->ID ).'</time></span></p>';
		$content .= '<a class="" href="'.get_permalink($post->ID).'"><p class="title is-4">'.$post->post_title.'</p></a>';
		$content .= '<p class="author is-6">Verfasser <span class="meta__author">'.get_the_author($post->ID).'</span></p>';
		$content .= '</div>';
		$content .= '</div>';
		$content .= '<div class="content">';
		$content .= '<small class="tags">';
		$content .= '<div class="tags">';
		$content .= '<code class="tag is-danger">';
		$content .= '<i class="fas fa-tags"></i>';
		$content .= '</code>';

		$post_tags = get_the_tags($post->ID);


		if (!empty($post_tags)) {
			foreach ($post_tags as $tag) {
				$content .= '<span class="tag"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></span>';
			}
		}

		$content .= '</div>';
		$content .= '</small>';
		$content .= '</div>';
		$content .= '</div>';
		$content .= '</div>';

	}

	//Inhalte übergeben
	return $content;

}

add_shortcode( 'all_posts', 'all_posts_shortcode' );

?>