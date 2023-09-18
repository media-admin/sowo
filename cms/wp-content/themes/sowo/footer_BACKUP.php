<footer class="site-footer">
			<div class="site-footer__row outer-wrapper">
				<div class="site-footer__contact-information-container outer-wrapper">
					<div class="site-footer__contact-information-logos inner-container">
						<section class="site-footer__contact-information">

							<div class="site-footer__contact-information-block">

								<div class="site-footer__contact-information-logo">
									<a class="" href="<?php echo get_home_url(); ?>">
										<img
											class="site-footer__contact-information-logo-img"
											src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/header-logo_sowo.svg"
											alt="Logo SoWo - Soziales Wohnhaus Neunkirchen"
										/>
									</a>
								</div>

								<div class="site-footer__contact-information-address">
									Energiestraße 2<br/>
									2540 Bad Vöslau
								</div>

								<div class="site-footer__contact-information-phone">
									<a class="site-footer__contact-information-phone-number" href="tel:+43263512345">
										02635/12345
									</a>
								</div>

								<div class="site-footer__contact-information-email">
									<a class="site-footer__contact-information-email-address" href="mail:office@sowo.at">
										office@sowo.at
									</a>
								</div>

								<div class="site-footer__contact-information-facebook">
									<a class="site-footer__contact-information-facebook-link" href="facebook.com/sowo" target="_blank">
										facebook.com/sowo
									</a>
								</div>

							</div>


							<div class="site-footer__additional-data">
								<nav class="site-footer__navigation">
									<ul class="site-footer__navigation-list">
										<?php
											wp_nav_menu(array(
												'walker'	=> new FooterNavwalker(),
												'menu' => 'Footermenü',
												'theme_location' => 'footer-navigation',
												'depth'          => 1,
												'container'      => FALSE,
												'container_class'   => '',
												'menu_class'     => '',
												'items_wrap'     => '%3$s',
												'fallback_cb' => false
											));
										?>
									</ul>
								</nav>
							</div>

						</section>

						<div class="site-footer-navbar">
								<ul class="site-footer-navbar__navigation-list">
										<?php
											wp_nav_menu(array(
												'walker'	=> new FooterMenuNavwalker(),
												'menu' => 'Footernavigation',
												'theme_location' => 'nav-menu-footer',
												'depth'          => 1,
												'container'      => FALSE,
												'container_class'   => '',
												'menu_class'     => '',
												'items_wrap'     => '%3$s',
												'fallback_cb' => false
											));
										?>
								</ul>
							</div>

						</div>
					</div>
				</div>







			<div class="site-footer__copyright">
				©&nbsp;Copyright&nbsp;2023 - Soziales Wohnhaus Neunkirchen
			</div>
		</footer>

		<?php wp_footer();?>

		<!-- == SCRIPTS == -->

		<!-- Hamburger Menu Toggle -->
		<script async>
			jQuery(document).ready(function(){
				var navigation = document.querySelector(".main-navigation")
				var hamburger = document.querySelector(".burger-menu")

				navigation.onclick = function () {
					this.classList.toggle("is-active")
				}

				hamburger.onclick = function () {
					this.classList.toggle("checked")
				}
			});
		</script>


		<!-- Accordion Functionality -->
		<script async>
			const items = document.querySelectorAll(".accordion button");

			function toggleAccordion() {
				const itemToggle = this.getAttribute('aria-expanded');

				for (i = 0; i < items.length; i++) {
					items[i].setAttribute('aria-expanded', 'false');
				}

				if (itemToggle == 'false') {
					this.setAttribute('aria-expanded', 'true');
				}
			}

			items.forEach(item => item.addEventListener('click', toggleAccordion));
		</script>


		<!-- <script src="./assets/scripts/index.js"></script> -->


		<!-- Testimonial Slider -->
		<script async>
			jQuery('.testimonials-slider__container').slick({
				dots: false,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 5000,
				speed: 800,
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: true,

				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1,
							arrows: true,
						}
					},
					{
						breakpoint: 791,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
							arrows: true,
						}
					},
					{
						breakpoint: 480,
						settings: {
							infinite: true,
							autoplay: true,
							autoplaySpeed: 3000,
							speed: 800,
							slidesToShow: 1,
							slidesToScroll: 1,
							arrows: true,
							centerPadding: '40px',
						}
					}
				]
			});
		</script>


		<!-- PARTNER SLIDER -->
		<script async>
			jQuery('.partner-slider__container').slick({
				dots: false,
				infinite: true,
				autoplay: false,
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: true,

				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1,
							arrows: true,
						}
					},
					{
						breakpoint: 791,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1,
							arrows: true,
						}
					},
					{
						breakpoint: 480,
						settings: {
							infinite: true,
							slidesToShow: 1,
							slidesToScroll: 1,
							arrows: true,
							centerPadding: '40px',
						}
					}
				]
			});
		</script>

	</body>
</html>