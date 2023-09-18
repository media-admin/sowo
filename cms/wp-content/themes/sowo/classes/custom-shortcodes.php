<?php

function shortcode_posts_overview_aktuelles() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_posts-overview-aktuelles');
	return ob_get_clean();
}

add_shortcode( 'shortcode_posts_overview_aktuelles', 'shortcode_posts_overview_aktuelles' );


function shortcode_posts_overview_events() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_posts-overview-events');
	return ob_get_clean();
}

add_shortcode( 'shortcode_posts_overview_events', 'shortcode_posts_overview_events' );


function shortcode_posts_overview_projekte() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_posts-overview-projekte');
	return ob_get_clean();
}

add_shortcode( 'shortcode_posts_overview_projekte', 'shortcode_posts_overview_projekte' );





function shortcode_press_releases_overview() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_press-releases-overview');
	return ob_get_clean();
}

add_shortcode( 'shortcode_press_releases_overview', 'shortcode_press_releases_overview' );


function shortcode_team_members_beve() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_team-members-beve');
	return ob_get_clean();
}

add_shortcode( 'shortcode_team_members_beve', 'shortcode_team_members_beve' );


function shortcode_team_members_bw() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_team-members-bw');
	return ob_get_clean();
}

add_shortcode( 'shortcode_team_members_bw', 'shortcode_team_members_bw' );


function shortcode_team_members_org() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_team-members-org');
	return ob_get_clean();
}

add_shortcode( 'shortcode_team_members_org', 'shortcode_team_members_org' );


function shortcode_team_members_punk() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_team-members-punk');
	return ob_get_clean();
}

add_shortcode( 'shortcode_team_members_punk', 'shortcode_team_members_punk' );


function shortcode_team_members_wg() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_team-members-wg');
	return ob_get_clean();
}

add_shortcode( 'shortcode_team_members_wg', 'shortcode_team_members_wg' );



function shortcode_annual_reports() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_annual-reports');
	return ob_get_clean();
}

add_shortcode( 'shortcode_annual_reports', 'shortcode_annual_reports' );


function shortcode_contact_person_beve() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_contact-person-beve');
	return ob_get_clean();
}

add_shortcode( 'shortcode_contact_person_beve', 'shortcode_contact_person_beve' );


function shortcode_contact_person_bw() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_contact-person-bw');
	return ob_get_clean();
}

add_shortcode( 'shortcode_contact_person_bw', 'shortcode_contact_person_bw' );



function shortcode_contact_person_punk() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_contact-person-punk');
	return ob_get_clean();
}

add_shortcode( 'shortcode_contact_person_punk', 'shortcode_contact_person_punk' );



function shortcode_contact_person_wg() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_contact-person-wg');
	return ob_get_clean();
}

add_shortcode( 'shortcode_contact_person_wg', 'shortcode_contact_person_wg' );





function shortcode_sponsors_overview() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_sponsors-overview');
	return ob_get_clean();
}

add_shortcode( 'shortcode_sponsors_overview', 'shortcode_sponsors_overview' );



function shortcode_partner_overview_presse() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_partner-overview-presse');
	return ob_get_clean();
}

add_shortcode( 'shortcode_partner_overview_presse', 'shortcode_partner_overview_presse' );


function shortcode_partner_overview_allgemein() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_partner-overview-allgemein');
	return ob_get_clean();
}

add_shortcode( 'shortcode_partner_overview_allgemein', 'shortcode_partner_overview_allgemein' );


function shortcode_partner_overview_sozialbereich() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_partner-overview-sozialbereich');
	return ob_get_clean();
}

add_shortcode( 'shortcode_partner_overview_sozialbereich', 'shortcode_partner_overview_sozialbereich' );




function shortcode_partner_slider() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_partner-slider');
	return ob_get_clean();
}

add_shortcode( 'shortcode_partner_slider', 'shortcode_partner_slider' );


function shortcode_jobs() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_jobs');
	return ob_get_clean();
}

add_shortcode( 'shortcode_jobs', 'shortcode_jobs' );



function shortcode_google_maps_beve() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_google-maps-beve');
	return ob_get_clean();
}

add_shortcode( 'shortcode_google_maps_beve', 'shortcode_google_maps_beve' );


function shortcode_google_maps_bw() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_google-maps-bw');
	return ob_get_clean();
}

add_shortcode( 'shortcode_google_maps_bw', 'shortcode_google_maps_bw' );


function shortcode_google_maps_org() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_google-maps-org');
	return ob_get_clean();
}

add_shortcode( 'shortcode_google_maps_org', 'shortcode_google_maps_org' );


function shortcode_google_maps_wg() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_google-maps-wg');
	return ob_get_clean();
}

add_shortcode( 'shortcode_google_maps_wg', 'shortcode_google_maps_wg' );


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