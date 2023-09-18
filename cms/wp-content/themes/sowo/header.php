<!DOCTYPE html>
<html class="outer-html" lang='de' <?php language_attributes(); ?>>
	<head>

		<!-- Meta Data -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="content-type" content="text/html; charset=macintosh" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scaleable=no">
		<meta name="keywords" content="Lion Mate lion-mate.at">

		<!-- === FAVICONS === -->

		<!-- Default -->
		<link rel="icon" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/favicon.svg" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/favicon.ico" type="image/x-icon">

		<!-- PNG icons with different sizes -->
		<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/favicon-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/favicon-16x16.png" sizes="16x16">

		<!-- Apple Touch Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/apple-touch-icon-180x180.png">
		<link rel="apple-touch-icon" sizes="192x192" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/apple-touch-icon-192x192.png">

		<!-- Apple macOS Safari Mask Icon -->
		<link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/favicon.svg" color="#B6274F">

		<!-- Apple iOS Safari Theme -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#6E2596">
		<meta name="apple-mobile-web-app-title" content="SoWo - Soziales Wohnen Neunkirchen">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<!-- Microsoft Windows Tiles -->
		<meta name="theme-color" content="#6E2596">
		<meta name="msapplication-navbutton-color" content="#FF9500">
		<meta name="msapplication-TileColor" content="#6E2596">
		<meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/windows-tile-icon-144x144.png">
		<meta name="application-name" content="SoWo - Soziales Wohnen Neunkirchen">

		<!-- Internet Explorer 11 Tiles -->
		<meta name="msapplication-square70x70logo" content="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/ms-ie11-icon-70x70.png">
		<meta name="msapplication-square150x150logo" content="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/ms-ie11-icon-150x150.png">
		<meta name="msapplication-wide310x150logo" content="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/ms-ie11-icon-310x150.png">
		<meta name="msapplication-square310x310logo" content="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/ms-ie11-icon-310x310.png">

		<!-- Open Graph -->
		<meta property="og:title" content="SoWo - Soziales Wohnen Neunkirchen">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://www.sowo.at">
		<meta property="og:image" content="og_image_url">
		<meta property="og:site_name" content="SoWo - Soziales Wohnen Neunkirchen">
		<meta property="og:locale" content="de_AT">

		<!-- Site Title -->
		<?php if (is_front_page() ) : ?>
			<title>Startseite | <?php bloginfo( 'name' ); ?></title>
		<?php else : ?>
			<title><?php wp_title($sep = ''); ?></title>
		<?php endif; ?>

		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>

	</head>

	<body <?php body_class( 'site-body' ); ?>>

		<header class="site-header">
			<div class="site-header__wrapper">

				<!-- Header Logo -->
				<div class="site-header__branding">
					<div class="site-header__logo">
						<a class="header-logo__link wrapper" href="<?php echo get_home_url(); ?>">
							<img
								class="site-header__logo-img"
								src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/header-logo_sowo.svg"
								alt="Logo SoWo - Soziales Wohnhaus Neunkirchen"
							/>
						</a>
					</div>
				</div>

				<div class="site-header__nav-container">

					<!-- Hamburger Menu Toggle -->
					<nav class="main-navigation">
						<div class="site-menu">
							<div class="burger-menu">
								<span class="line"></span>
								<span class="line"></span>
								<span class="line"></span>
							</div>
						</div>


						<!-- Main Navigation -->
						<div class="navbar">
							<ul class="navbar__navigation-list">
								<?php
									$defaults = array(
										'walker'         => new Custom_Navwalker(),
										'menu'           => 'Hauptnavigation',
										'theme_location' => 'nav-menu-main',
										'depth'          => 1,
										'container'      => FALSE,
										'container_class'   => '',
										'menu_class'     => '',
										'items_wrap'     => '%3$s',
										'fallback_cb'		=>	'NavWalker::fallback'
									);
									wp_nav_menu( $defaults );
								?>
							</ul>
						</div>

					</nav>
				</div>
			</div>
		</header>


		<div class="large-hero">
			<?php
			$image_desktop = get_field('hero-img__desktop');
			$image_smartphone = get_field('hero-img__smartphone');

			if ( is_singular( array( 'post', 'press-release' ) ) || ( is_category ( array( 'aktuelles', 'events', 'projekte', 'press-release' ) ) ) ) { ?>
			 <img class="large-hero__img lar ge-hero__img--desktop lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/hero-image.jpg" alt="SoWo Hero Header" />
			<?php } else {
				 if( !empty( $image_desktop ) ): ?>
					 <img class="large-hero__img large-hero__img--desktop lazyload" src="<?php echo esc_url($image_desktop['url']); ?>" alt="<?php echo esc_attr($image_desktop['alt']); ?>" />
				 <?php endif;

				 if( !empty( $image_smartphone ) ): ?>
					 <img class="large-hero__img large-hero__img--smartphone lazyload" src="<?php echo esc_url($image_smartphone['url']); ?>" alt="<?php echo esc_attr($image_smartphone['alt']); ?>" />
				 <?php endif;
			} ?>







		</div>

		<aside id="contact-sidebar">
			<section id="contact-sidebar__phone">
				<a class="contact-sidebar__phone-link" href="
					<?php
					if ( is_page( 'wg' ) ) {
						echo 'tel:+436766981648';
					} elseif ( is_page( 'bw' ) ) {
						echo 'tel:+436767086332';
					} elseif ( is_page( 'beve' ) ) {
						echo 'tel:+436765958879';
					} elseif ( is_page( 'pu-nk' ) ) {
					echo 'tel:+436801228924';
					} else {
							echo '#';
					}
					?>
					" />
					<img class="contact-sidebar_phone-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_phone--white.svg"/>
				</a>
			</section>
			<section id="contact-sidebar__email">
				<a class="contact-sidebar__email-link" href="
					<?php
					if ( is_page( 'wg' ) ) {
						echo 'mailto:wg@sowo.at';
					} elseif ( is_page( 'bw' ) ) {
						echo 'mailto:bw@sowo.at';
					} elseif ( is_page( 'beve' ) ) {
						echo 'mailto:beve@sowo.at';
					} elseif ( is_page( 'pu-nk' ) ) {
					echo 'mailto:streetwork@sowo.at';
					} else {
							echo 'mailto:office@sowo.at';
					}
					?>
					">
					<img class="contact-sidebar__email-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_email--white.svg"/>
				</a>
			</section>

			<section id="contact-sidebar__facebook">
				<a class="contact-sidebar__facebook-link" href="
					<?php
					if ( is_page( 'wg' ) ) {
						echo 'https://www.facebook.com/profile.php?id=100064312793782';
					} elseif ( is_page( 'bw' ) ) {
						echo 'https://www.facebook.com/profile.php?id=100064312793782';
					} elseif ( is_page( 'beve' ) ) {
						echo 'https://www.facebook.com/profile.php?id=100064312793782';
					} elseif ( is_page( 'pu-nk' ) ) {
					echo 'https://www.facebook.com/profile.php?id=100064312793782';
					} else {
							echo 'https://www.facebook.com/profile.php?id=100064312793782';
					}
					?>
					" target="_blank">
					<img class="contact-sidebar__facebook-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_facebook--white.svg"/>
				</a>
			</section>
		</aside>

		<main class="site-main">
			<div class="site-content">
				<div class="inner-container">
					<?php
					if ( is_category ( array( 'aktuelles', 'events', 'projekte', 'press-release' ) ) ) { ?>
					<h1 class="site-title"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h1>
					<?php } else { ?>
						<h1 class="site-title"><?php the_title();?> <span class="site-title-subheading"><?php the_field('page_subheading');?></span></h1>
					<?php } ?>