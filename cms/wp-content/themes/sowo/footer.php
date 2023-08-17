<footer class="site-footer">
			<div class="site-footer__row outer-wrapper">

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

				</div>


				<section class="site-footer__contact-information">
					<div class="site-footer__contact-information-container outer-wrapper">
						<div class="site-footer__contact-information-logos inner-container">
							<div class="site-footer__contact-information-logo">
								<a class="" href="<?php echo get_home_url(); ?>">
									<img
										class="site-footer__contact-information-logo-img"
										src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/logos/footer-logo_epicon.svg"
										alt="Logo EPICON Engineering GmbH"
									/>
								</a>
							</div>
							<div class="site-footer__contact-information-logo-extensions">
								<img
									class="site-footer__contact-information-logo-extension-img"
									src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/logos/logo_certified-engineering-office.svg"
									alt="Logo Staatlich geprüftes Ingenierubüro"
								/>
							</div>
							<div class="site-footer__contact-information-logo-extensions">
								<img
									class="site-footer__contact-information-logo-extension-img"
									src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/logos/logo_tuev-sued-ISO-9001.svg"
									alt="Logo TÜV SÜD ISO 9001"
								/>
							</div>
						</div>

						<div class="site-footer__contact-information-block">
							<div class="site-footer__contact-information-phone">
								<a class="site-footer__contact-information-phone-number" href="tel:+43266240060">
									+43 2662 40060
								</a>
							</div>
							<div class="site-footer__contact-information-email">
								<a class="site-footer__contact-information-email-address" href="mail:info@epicon.pro">
									info@epicon.pro
								</a>
							</div>
							<div class="site-footer__contact-information-address">
								Energiestraße 2<br/>
								2540 Bad Vöslau
							</div>
						</div>

						<div class="site-footer__contact-information-member-of">
							<img
								class="site-footer__contact-information-member-of-img"
								src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/logos/logo_member-of-engineering-office.svg"
								alt="Logoleiste Mitglied des Fachverbands Ingenierubüros"
							/>
						</div>
					</div>
				</section>




			<div class="site-footer__copyright">
				©&nbsp;Copyright&nbsp;2023 - EPICON Engineering GmbH
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