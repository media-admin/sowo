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
		<meta name="apple-mobile-web-app-status-bar-style" content="#B6933D">
		<meta name="apple-mobile-web-app-title" content="Lion Mate - Energy Beyond Standards">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<!-- Microsoft Windows Tiles -->
		<meta name="theme-color" content="#B6933D">
		<meta name="msapplication-navbutton-color" content="#525050">
		<meta name="msapplication-TileColor" content="#B6274F">
		<meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/windows-tile-icon-144x144.png">
		<meta name="application-name" content="EPICON Engineering GmbH">

		<!-- Internet Explorer 11 Tiles -->
		<meta name="msapplication-square70x70logo" content="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/ms-ie11-icon-70x70.png">
		<meta name="msapplication-square150x150logo" content="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/ms-ie11-icon-150x150.png">
		<meta name="msapplication-wide310x150logo" content="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/ms-ie11-icon-310x150.png">
		<meta name="msapplication-square310x310logo" content="<?php echo esc_url( get_template_directory_uri()); ?>/assets/favicon/ms-ie11-icon-310x310.png">

		<!-- Open Graph -->
		<meta property="og:title" content="EPICON Engineering GmbH">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://www.epicon.pro">
		<meta property="og:image" content="og_image_url">
		<meta property="og:site_name" content="EPICON Engineering GmbH">
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

		<header class="site-header-top">
			<div class="site-header-top__wrapper">
				<div class="site-header-top__contact-information">
					<div class="site-header-top__contact-information-email">
						<img class="site-header-top__contact-information-email-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_email--blue.svg"/>
						<a class="site-header-top__contact-information-email-address" href="mail:info@epicon.pro">info@epicon.pro</a>
					</div>

					<div class="site-header-top__contact-information-phone">
						<img class="site-header-top__contact-information-phone-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_phone--blue.svg"/>
						<a class="site-header-top__contact-information-phone-number" href="tel:+43266240060">+43 2662 40060</a>
					</div>

					<div class="site-header-top__contact-information-address">
						<img class="site-header-top__contact-information-address-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_address--blue.svg"/>
						Energiestraße 2, 2540 Bad Vöslau
					</div>
				</div>

				<div class="language__container">
					<ul class="language__list">
						<li class="language__list-item">
							<a class="language__list-item-link" href="#">DE</a>
						</li>
						<li class="language__list-item">
							<a class="language__list-item-link" href="#">EN</a>
						</li>
					</ul>
				</div>
			</div>
		</header>

		<header class="site-header">
			<div class="site-header__wrapper">

				<!-- Header Logo -->
				<div class="site-header__branding">
					<div class="site-header__logo">
						<a class="header-logo__link wrapper" href="<?php echo get_home_url(); ?>">
							<img
								class="site-header__logo-img"
								src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/logos/header-logo_epicon.svg"
								alt="Logo EPICON Engineering GmbH"
							/>
						</a>
					</div>
				</div>

				<div class="site-header__nav-container">

					<!-- Language Switcher on Mobile -->
					<div class="mobile-language__container">
						<ul class="mobile-language__list">
							<li class="mobile-language__list-item">
								<a class="mobile-language__list-item-link" href="#">DE</a>
							</li>
							<li class="mobile-language__list-item">
								<a class="mobile-language__list-item-link" href="#">EN</a>
							</li>
						</ul>
					</div


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

				if ( is_singular( 'job' ) ) { ?>
				 <img class="large-hero__img large-hero__img--desktop lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/large-hero.jpg" alt="EPICON Hero Header" />
				<?php } else {
				 	if( !empty( $image_desktop ) ): ?>
					 	<img class="large-hero__img large-hero__img--desktop lazyload" src="<?php echo esc_url($image_desktop['url']); ?>" alt="<?php echo esc_attr($image_desktop['alt']); ?>" />
				 	<?php endif;

				 	if( !empty( $image_smartphone ) ): ?>
					 	<img class="large-hero__img large-hero__img--smartphone lazyload" src="<?php echo esc_url($image_smartphone['url']); ?>" alt="<?php echo esc_attr($image_smartphone['alt']); ?>" />
				 	<?php endif;
				} ?>



			<!-- <div class="large-hero__text">
				<h1 class="">
					<?php the_title();?>
				</h1>
			</div> -->
		</div>

		<div class="contact-navbar">
			<div class="contact-navbar__wrapper">

				<div class="contact-navbar__item contact-navbar__item--email">
					<img class="contact-navbar__item--email-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_email--blue.svg"/>
					<a class="contact-navbar__item--email-address" href="mail:info@epicon.pro">info@epicon.pro</a>
				</div>

				<div class="contact-navbar__item contact-navbar__item--phone">
					<img class="contact-navbar__item--phone-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_phone--blue.svg"/>
					<a class="contact-navbar__item--phone-number" href="tel:+43266240060">+43 2662 40060</a>
				</div>

			</div>
		</div>

		<main class="site-main">
			<div class="site-content">
				<div class="inner-container">
					<h1 class="site-title"><?php the_title();?></h1>
					<h2 class="site-content__intro-heading">
						<?php the_field("pages_subheading"); ?>
					</h2>







