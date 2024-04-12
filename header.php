<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Default
 */
global $redux;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<!-- Модальное окно - Заказать звонок -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header align-items-start">
        <span class="modal-title fs-6 text-black text-center px-4" id="exampleModalLabel">Пожалуйста, заполните форму ниже, и мы свяжемся с вами как можно скорее</span>
        <button type="button" class="btn-close m-1" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
	  	<?php echo do_shortcode('[contact-form-7 id="fc3ea44" title="Заказать звонок"]'); ?>
      </div>
    </div>
  </div>
</div>

<!-- Модальное окно - Получить консультацию -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header align-items-start">
        <span class="modal-title fs-6 text-black text-center px-4" id="exampleModalLabel">Оставьте заявку и наш менеджер свяжаться с вами в ближайшее время для подробного информирования.</span>
        <button type="button" class="btn-close m-1" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
	  	<?php echo do_shortcode('[contact-form-7 id="ce6e208" title="Получить консультацию"]'); ?>
      </div>
    </div>
  </div>
</div>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- <a data-bs-toggle="modal" href="#exampleModalToggle1" class="nav-link btn btn-success fw-bold text-uppercase text-white py-2 px-3" aria-current="page" href="#">
	Заказать звонок
</a> -->
<div class="header-bg">
<div class="nav-line-top"></div>
<div class="nav-line-bottom d-none d-lg-block"></div>
<header class="header" id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">	
					<!-- Menu -->
					<nav class="navbar navbar-expand-lg flex-lg-column align-items-start px-2 py-0">
						<div class="navbar-top d-flex w-100">
							<div class="navbar-brand py-4 px-5">
								<?php the_custom_logo(); ?>
							</div>
						  	<div class="nav-connect d-none d-md-flex flex-column align-items-end ms-lg-auto ps-5 pe-4 py-3">
								<a class="nav-link d-flex align-items-center fw-bold fs-4" aria-current="page" href="tel:<?php echo $redux["tel"]; ?>">
									<img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.svg" alt="Позвонить в ИнВятКом">
									<?php echo $redux["tel"]; ?>
								</a>
								<a class="nav-link d-flex align-items-center" aria-current="page" href="mailto:<?php echo $redux["email"]; ?>">
									<img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="Написать в ИнВятКом">
									<?php echo $redux["email"]; ?>
								</a>
							</div>
							<button class="navbar-toggler position-relative m-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span></span>
							</button>
						</div>
						  <div class="collapse navbar-collapse text-uppercase fw-bold w-100" id="navbarSupportedContent">
							<ul class="navbar-nav mt-3 mt-lg-0 mb-2 mb-lg-0 align-items-center text-center">
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
							<div class="social-link d-flex ms-auto">
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
							<div class="nav-connect d-md-none d-flex flex-column align-items-center ps-5 pe-4 py-3">
								<a class="nav-link d-flex align-items-center fw-bold fs-4" aria-current="page" href="tel:<?php echo $redux["tel"]; ?>">
									<img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.svg" alt="Позвонить в ИнВятКом">
									<?php echo $redux["tel"]; ?>
								</a>
								<a class="nav-link d-flex align-items-center" aria-current="page" href="mailto:<?php echo $redux["email"]; ?>">
									<img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="Написать в ИнВятКом">
									<?php echo $redux["email"]; ?>
								</a>
							</div>
						</div>
					</nav>
				</div>	
			</div>
		</div>
</header>
