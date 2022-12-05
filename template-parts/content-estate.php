<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nk
 */

?>
<?php global $nk_opt; ?>
<div class="container estate mt-2">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="row">
				<div class="col-lg-6">
					<?php
					if (is_singular()) :
						the_title('<h1 class="estate__title">', '</h1>
				');
					else :
						the_title('<h2 class="estate__title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
					endif;

					if ('post' === get_post_type()) :
					?><span class="entry-date"><i class="bi bi-clock-fill"></i> <?php echo get_the_date(); ?></span>
					<?php endif; ?>
				</div>
			</div>
		</header>
		<div class="entry-content">
			<div class="row">
				<div class="col-lg-8">
					<div class="pb-2">
						<span class="estate__data">Тип: </span>
						<?php the_field('estate_type'); ?> <?php the_field('estate_type_kv'); ?>
					</div>
					<div class="pb-2">
						<span class="estate__data">Адрес: </span>
						<?php the_field('estate_adress'); ?>
					</div>
					<div class="pb-2">
						<span class="estate__data">Площадь: </span>
						<?php the_field('estate_s'); ?> м²
					</div>
					<div class="pb-4">
						<span class="estate__data">Стоимость: </span>
						<?php the_field('estate_price'); ?> ₽
					</div>
					<div class="pb-4">
						<?php the_field('estate_description'); ?>
					</div>
					<div>

						<?php

						$images = get_field('estate_gallery');
						$size = 'full'; // (thumbnail, medium, large, full или произвольный размер)

						if ($images) : ?>
							<div class="estate__gallery">
								<?php foreach ($images as $image) : ?>
									<div class="estate__gallery-img">
										<a href="" type="button" data-bs-toggle="modal" data-bs-target="#estateImgFull"><?php echo wp_get_attachment_image($image['ID'], $size); ?></a>

									</div>
									<div class="modal fade" id="estateImgFull" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-fullscreen">
											<div class="modal-content">
												<div class="modal-header">
													<?php
													if (is_singular()) :
														the_title('<h5 class="estate__title__modal">', '</h5>
				');
													else :
														the_title('<h6 class="estate__title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h6>');
													endif;

													if ('post' === get_post_type()) :
													?>
													<?php endif; ?>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body modal-estate-gallery">
													<img style="width: 100%;" src="<?php echo $image['url']; ?>" alt="">
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>

					</div>
				</div>
				<div class="col-lg-4 mt-3 mt-lg-0">
					<div class="estate__contact d-flex text-center">
						<a class="estate__phone w-100" href="tel:<?php echo $nk_opt['phone_main']; ?>"><?php echo $nk_opt['phone_main']; ?></a>
					</div>
					<div class="estate__contact  mt-3">
						<p>Запросить обратный звонок</p>
						<?php echo do_shortcode('[contact-form-7 id="111" title="Contact form 1"]'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="estate__maps">
				<div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/55/tyumen/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Тюмень</a><a href="https://yandex.ru/maps/55/tyumen/house/ulitsa_50_let_oktyabrya_57a/YkwYcw5jQEEHQFttfX1yeHpjYQ==/?ll=65.593940%2C57.139605&utm_medium=mapframe&utm_source=maps&z=16.93" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица 50 лет Октября, 57А — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUjBKhVtB" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
			</div>
		</div>
		<div class="row">
			<?php the_tags($before, $separator, $after); ?>
		</div>

	</article><!-- #post-<?php the_ID(); ?> -->
</div>