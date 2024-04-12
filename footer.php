<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Default
 */
global $redux;
?>

	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="navbar-brand py-4 px-5">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<div class="col-lg-6 d-none d-lg-flex">
					<h4 class="text-white text-uppercase fs-3 mt-auto ps-3 pb-3">Навигация</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 px-0">
					<div class="d-flex">
						<div class="col-12 col-md-7">
							<div class="footer-phone w-100">
								<a class="text-white fw-bold fs-4" href="tel:<?php echo $redux["tel"]; ?>">
									<?php echo $redux["tel"]; ?>
								</a>
								<p class="mb-0">
									Консультации и расчет
								</p>
							</div>
							<div class="footer-social d-flex w-100 justify-content-between">
								<a href="<?php echo $redux["whatsapp"]; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.svg" alt="WhatsApp">
								</a>
								<a href="<?php echo $redux["vk"]; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt="vk">
								</a>
								<a href="mailto:<?php echo $redux["email"]; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="Почта">
								</a>
							</div>
							<div class="footer-company w-100 text-uppercase text-center text-lg-start">
								ООО "ИнВятКом"
							</div>
						</div>
						<div class="col-lg-5 d-none d-md-block">
							<div class="footer-address h-lg-100 d-flex flex-column justify-content-between">
								<div>
									<div>
										<?php echo $redux["index"]; ?>,
									</div>
									<div>
										г.<?php echo $redux["city"]; ?>,
									</div>
									<div>
										ул. <?php echo $redux["street"]; ?>,
									</div>
									<div>
										<?php echo $redux["room"]; ?>
									</div>
								</div>
								<div>
									<div>
										<?php echo $redux["email"]; ?>
									</div>
									<div>
										ИНН <?php echo $redux["inn"]; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 d-md-none">
							<div class="footer-address h-lg-100 d-flex flex-column justify-content-between">
								<div>
									<div>
										<?php echo $redux["index"]; ?>,
									</div>
									<div>
										г.<?php echo $redux["city"]; ?>,
									</div>
									<div>
										ул. <?php echo $redux["street"]; ?>,
									</div>
									<div>
										<?php echo $redux["room"]; ?>
									</div>
								</div>
								<div class="mt-3">
									<div>
										<?php echo $redux["email"]; ?>
									</div>
									<div>
										ИНН <?php echo $redux["inn"]; ?>
									</div>
								</div>
							</div>
						</div>
				<div class="col-lg-6 d-flex d-lg-none justify-content-center pt-3 pb-2">
					<h4 class="text-white text-uppercase fs-3">Навигация</h4>
				</div>
				<div class="col-lg-6">
					<ul class="navbar-nav mb-2 mb-lg-0 mt-3 align-items-center align-items-lg-start">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'navbar-nav',
							)
						);
						?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<p class="copyright text-end text-lg-start">2024</p>
				</div>
				<div class="col-lg-6 d-none d-lg-block">

				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
