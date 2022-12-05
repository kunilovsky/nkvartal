<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nk
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<?php wp_head(); ?>
</head>
<?php global $nk_opt; ?>

<body style="background: linear-gradient(0deg, rgba(13, 13, 13, 0.9), rgba(13, 13, 13, 0.9)), url(<?php echo $nk_opt["bg-img"]['url']; ?>);" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="sticky-top">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img src="<?php echo $nk_opt["logo"]['url']; ?>" alt="logo">
				</a>
				<div class="header-contact">
					<a href="https://yandex.ru/maps/-/CCUjaGRpoA" target="_blank"> <i class="bi bi-pin-map-fill"></i><?php echo $nk_opt['adres_main']; ?></a>
					<a href="tel:<?php echo $nk_opt['phone_main']; ?>"><i class="bi bi-telephone-forward"></i> <?php echo $nk_opt['phone_main']; ?></a>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile" aria-controls="mobile" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="mobile">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container' => false,
							'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
							'add_li_class' => 'nav-item',
							'link_class' => 'nav-link'
						)
					);
					?>
				</div>
			</div>
		</nav>
	</header>
	<script>
		var className = "inverted";
		var scrollTrigger = 60;

		window.onscroll = function() {
			// We add pageYOffset for compatibility with IE.
			if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
				document.getElementsByTagName("header")[0].classList.add(className);
			} else {
				document.getElementsByTagName("header")[0].classList.remove(className);
			}
		};
	</script>