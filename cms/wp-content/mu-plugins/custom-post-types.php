<?php

/* === CUSTOM POST TYPES === */
function custom_post_types() {

	add_post_type_support( 'team', 'thumbnail' );
	add_post_type_support( 'team', 'excerpt' );

	add_filter( 'gallery_metabox_post_types', function( $types ) {
		$types[] = 'gallery';
		return $types;
	} );


	/* --- Custom Post Type PRESSE RELEASE --- */
	$labels = array(
		'name' =>  'Presse Releases',
		'add_new' => 'Neuen Presse Release erstellen',
		'edit_item' => 'Presse Release bearbeiten',
		'singular_name' => 'Presse Release',
		'all_items' => 'Alle Presse Releases',
		'supports' => array('title', 'author', 'custom-fields',
	));

	register_post_type( 'press-release', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'labels' => $labels,
		'supports' => ['revisions', 'thumbnail', 'title', 'editor', 'custom-fields'],
		'has_archive' => true,
		'exclude_from_search' => false,
		'rewrite' => array('slug' => 'press-releases', 'with_front' => true, 'pages' => true, 'feeds' => true,),
		'menu_position' => 9,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-megaphone'
	));

	add_post_type_support( 'press-release', 'thumbnail' );



	/* --- Custom Post Type TEAM MEMBERS --- */
	$labels = array(
		'name' =>  'Teammitglieder',
		'add_new' => 'Neues Teammitglied erstellen',
		'edit_item' => 'Teammitglied bearbeiten',
		'singular_name' => 'Teammitglied',
		'all_items' => 'Alle Teammitglieder',
		'supports' => array('title', 'editor', 'author', 'custom-fields',
	));

	register_post_type( 'team-member', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'taxonomies' => array( 'team-category' ),
		'labels' => $labels,
		'supports' => ['editor', 'page-attributes', 'revisions', 'thumbnail', 'title', 'custom-fields'],
		'has_archive' => false,
		'exclude_from_search' => false,
		'menu_position' => 9,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-nametag'
	));

	add_post_type_support( 'team-member', 'thumbnail' );


	/* --- Custom Post Type ANNUAL REPORT --- */
	$labels = array(
		'name' =>  'Jahresberichte',
		'add_new' => 'Neuen Jahresbericht erstellen',
		'edit_item' => 'Jahresbericht bearbeiten',
		'singular_name' => 'Jahresbericht',
		'all_items' => 'Alle Jahresberichte',
		'supports' => array('title', 'editor', 'author', 'custom-fields',
	));

	register_post_type( 'annual-report', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'labels' => $labels,
		'supports' => ['editor', 'revisions', 'thumbnail', 'title', 'custom-fields'],
		'has_archive' => false,
		'exclude_from_search' => false,
		'menu_position' => 16,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-text-page'
	));

	add_post_type_support( 'annual-report', 'thumbnail' );



	/* --- Custom Post Type JOB --- */
	$labels = array(
		'name' =>  'Jobs',
		'add_new' => 'Neuen Job erstellen',
		'edit_item' => 'Job bearbeiten',
		'singular_name' => 'Job',
		'all_items' => 'Alle Jobs',
		'supports' => array('title', 'editor', 'author', 'custom-fields',
	));

	register_post_type( 'job', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'taxonomies' => array( 'job-category' ),
		'labels' => $labels,
		'supports' => ['editor', 'revisions', 'revisions', 'thumbnail', 'title', 'custom-fields'],
		'has_archive' => false,
		'exclude_from_search' => false,
		'rewrite' => array('slug' => 'jobs', 'with_front' => true, 'pages' => true, 'feeds' => true,),
		'menu_position' => 9,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-open-folder'
	));

	add_post_type_support( 'job', 'thumbnail' );









	/* --- Custom Post Type PARTNER --- */
	$labels = array(
		'name' =>  'Partner',
		'add_new' => 'Neuen Partner anlegen',
		'edit_item' => 'Partner bearbeiten',
		'singular_name' => 'Partner',
		'all_items' => 'Alle Partner',
		'supports' => array('title', 'editor', 'author', 'custom-fields'
	));

	register_post_type( 'partner', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'taxonomies' => array( 'partners-category' ),
		'labels' => $labels,
		'supports' => ['editor', 'revisions', 'thumbnail', 'title', 'custom-fields'],
		'has_archive' => false,
		'exclude_from_search' => true,
		'rewrite' => array('slug' => 'partner'),
		'menu_position' => 11,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-networking'
	));

	add_post_type_support( 'partner', 'thumbnail' );



	/* --- Custom Post Type SPONSOR --- */
	$labels = array(
		'name' =>  'Sponsoren',
		'add_new' => 'Neuen Sponsor anlegen',
		'edit_item' => 'Sponsor bearbeiten',
		'singular_name' => 'Sponsor',
		'all_items' => 'Alle Sponsorren',
		'supports' => array('title', 'editor', 'author', 'custom-fields'
	));

	register_post_type( 'sponsor', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'taxonomies' => array( 'sponsor-category' ),
		'labels' => $labels,
		'supports' => ['editor', 'revisions', 'thumbnail', 'title', 'custom-fields'],
		'has_archive' => false,
		'exclude_from_search' => true,
		'menu_position' => 12,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-awards'
	));

	add_post_type_support( 'sponsor', 'thumbnail' );



	/* --- Custom Post Type CONTACT DETAILS ---

	$labels = array(
		'name' =>  'Kontakt-Details',
		'add_new' => 'Neues Kontakt-Detail erstellen',
		'edit_item' => 'Kontakt-Detail bearbeiten',
		'singular_name' => 'Kontakt-Detail',
		'all_items' => 'Alle Kontakt-Details',
		'supports' => array('title', 'editor', 'author', 'custom-fields',
	));

	register_post_type( 'contact-detail', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'labels' => $labels,
		'supports' => ['title', 'editor', 'author', 'custom-fields', 'revisions'],
		'has_archive' => false,
		'exclude_from_search' => true,
		'menu_position' => 15,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-list-view'
	));

	add_post_type_support( 'contact-detail', '' );
	*/



	/* --- Custom Post Type NOTIFICATION --- */
	$labels = array(
		'name' =>  'Hinweise',
		'add_new' => 'Neuen Hinweis erstellen',
		'edit_item' => 'Hinweis bearbeiten',
		'singular_name' => 'Hinweis',
		'all_items' => 'Alle Hinweise',
		'supports' => array('title', 'editor', 'author', 'custom-fields',
	));

	register_post_type( 'notification', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'supports' => ['editor', 'page-attributes', 'revisions', 'thumbnail', 'title', 'custom-fields'],
		'labels' => $labels,
		'has_archive' => false,
		'exclude_from_search' => true,
		'rewrite' => array('slug' => 'hinweise'),
		'menu_position' => 12,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-bell'
	));

	add_post_type_support( 'notification', 'thumbnail' );


}



/* === CUSTOM TAXONOMIES === */

function custom_taxonomies() {

	/* --- Custom Taxonomie TEAM CATEGORY --- */
	$labels = array(
		'name' => _x( 'Teams', 'taxonomy general name' ),
		'singular_name' => _x( 'Team', 'taxonomy singular name' ),
		'search_items' =>  __( 'Teams durchsuchen' ),
		'popular_items' => __( 'Meist benutzte Teams' ),
		'all_items' => __( 'Alle Teams' ),
		'parent_item' => __( 'Übergeordnetes Team' ),
		'parent_item_colon' => __( 'Übergeordnetes Team:' ),
		'edit_item' => __( 'Team bearbeiten' ),
		'update_item' => __( 'Team aktualisieren' ),
		'add_new_item' => __( 'Neues Team hinzufügen' ),
		'new_item_name' => __( 'Name des neuen Teams' ),
	);

	register_taxonomy('team-category', array('team-member'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'query_var' => true,
	));


	/* --- Custom Taxonomie JOB CATEGORY --- */
	$labels = array(
		'name' => _x( 'Job Kategorie', 'taxonomy general name' ),
		'singular_name' => _x( 'Job Kategorie', 'taxonomy singular name' ),
		'search_items' =>  __( 'Job Kategorien durchsuchen' ),
		'popular_items' => __( 'Meist benutzte Job Kategorie' ),
		'all_items' => __( 'Alle Job Kategorien' ),
		'parent_item' => __( 'Übergeordnete Job Kategorie' ),
		'parent_item_colon' => __( 'Übergeordnete Job Kategorie:' ),
		'edit_item' => __( 'Job Kategorie bearbeiten' ),
		'update_item' => __( 'Job Kategorie aktualisieren' ),
		'add_new_item' => __( 'Neue Job Kategorie hinzufügen' ),
		'new_item_name' => __( 'Name der neuen Job Kategorie' ),
	);

	register_taxonomy('job-category', array('job'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'query_var' => true,
	));


	/* --- Custom Taxonomie PARTNER CATEGORY --- */
	$labels = array(
		'name' => _x( 'Partner-Kategorien', 'taxonomy general name' ),
		'singular_name' => _x( 'Partner-Kategorie', 'taxonomy singular name' ),
		'search_items' =>  __( 'Partner-Kategorien durchsuchen' ),
		'popular_items' => __( 'Meist benutzte Partner-Kategorien' ),
		'all_items' => __( 'Alle Partner-Kategorien' ),
		'parent_item' => __( 'Übergeordnete Partner-Kategorie' ),
		'parent_item_colon' => __( 'Übergeordnete Partner-Kategorien:' ),
		'edit_item' => __( 'Partner-Kategorie bearbeiten' ),
		'update_item' => __( 'Partner-Kategorie aktualisieren' ),
		'add_new_item' => __( 'Neue Partner-Kategorien hinzufügen' ),
		'new_item_name' => __( 'Name der neuen Partner-Kategorie' ),
	);

	register_taxonomy('partner-category', array('partner'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'query_var' => true,
	));


	/* --- Custom Taxonomie SPONSOR CATEGORY --- */
	$labels = array(
		'name' => _x( 'Sponsor-Kategorien', 'taxonomy general name' ),
		'singular_name' => _x( 'Sponsor-Kategorie', 'taxonomy singular name' ),
		'search_items' =>  __( 'Sponsor-Kategorien durchsuchen' ),
		'popular_items' => __( 'Meist benutzte Sponsor-Kategorien' ),
		'all_items' => __( 'Alle Sponsor-Kategorien' ),
		'parent_item' => __( 'Übergeordnete Sponsor-Kategorie' ),
		'parent_item_colon' => __( 'Übergeordnete Sponsor-Kategorien:' ),
		'edit_item' => __( 'Sponsor-Kategorie bearbeiten' ),
		'update_item' => __( 'Sponsor-Kategorie aktualisieren' ),
		'add_new_item' => __( 'Neue Sponsor-Kategorien hinzufügen' ),
		'new_item_name' => __( 'Name der neuen Sponsor-Kategorie' ),
	);

	register_taxonomy('sponsor-category', array('sponsor'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'query_var' => true,
	));


}

add_action('init', 'custom_post_types');
add_action( 'init', 'custom_taxonomies', 0 );

?>