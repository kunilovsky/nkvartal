<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nk
 */

?>
<?php global $nk_opt; ?>
<footer>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 d-block d-lg-flex text-center text-lg-start">
				<div class="footer__logo">
					<img src="<?php echo $nk_opt["logo"]['url']; ?>" alt="logo"> <br>
					<span><?php echo date('Y'); ?>. Все права защищены</span>
				</div>
				<div class="footer__company">
					ИНН: 777777777 <br>
					ОГРН: 123456789 <br>
					<a href="#">Полные реквизиты</a>
				</div>
			</div>
			<div class="col-lg-4 footer__private text-center pt-2 pb-2 pt-lg-0 pb-lg-0">
				<a href="#">Политика конфиденциальности</a>
			</div>
			<div class="col-lg-4 footer__contact text-center text-lg-end">
				<a href="tel:<?php echo $nk_opt['phone_main']; ?>"><?php echo $nk_opt['phone_main']; ?></a>
				<a href=""><?php echo $nk_opt['adres_main']; ?></a>
			</div>
		</div>
	</div>
	<div class="text-center developer">
		Developer Kunilovsky VA
	</div>
</footer>
<?php wp_footer(); ?>

</body>

</html>