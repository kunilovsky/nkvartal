<?php /*Template Name: Услуги */
get_header();
?>

<section class="pt-lg-5">
    <div class="container">
        <h2>
            Услуги и сервис
        </h2>
        <div class="row">
            <div class="col-lg-6 col-12 p-3">
                <div class="usl__item" style="background: linear-gradient(120.99deg, rgba(35, 35, 35, 0.95) 10.09%, rgba(17, 17, 17, 0.95) 93.22%), url(http://localhost:8888/wp-content/uploads/2022/12/bg-i1.png);background-repeat: no-repeat;background-size: cover;">
                    <h3>
                        <i class="bi bi-buildings"></i> Недвижимость
                    </h3>
                    <ul class="usl__item-text">
                        <li>Обзор конкурентной среды. Анализ ключевых характеристик и тенденций на рынке</li>
                        <li>Мониторинг динамики спроса и предложения</li>
                        <li>Формирование портрета потребителя, включая все ключевые характеристики и др.</li>
                        <a href="<?php echo get_page_link('130'); ?>" class="usl__item-link">Подробнее</a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-12 p-3">
                <div class="usl__item" style="background: linear-gradient(120.99deg, rgba(35, 35, 35, 0.95) 10.09%, rgba(17, 17, 17, 0.95) 93.22%), url(http://localhost:8888/wp-content/uploads/2022/12/Rectangle-19.png);background-repeat: no-repeat;background-size: cover;">
                    <h3>
                        <i class="bi bi-palette2"></i> Ремонт
                    </h3>
                    <ul class="usl__item-text">
                        <li>Формирование плана-графика реализации объекта</li>
                        <li>Разработка дизайн-проекта</li>
                        <li>Выбор подрядной бригады и др.</li>
                        <a href="<?php echo get_page_link('134'); ?>" class="usl__item-link">Подробнее</a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-12 p-3">
                <div class="usl__item" style="background: linear-gradient(120.99deg, rgba(35, 35, 35, 0.95) 10.09%, rgba(17, 17, 17, 0.95) 93.22%), url(http://localhost:8888/wp-content/uploads/2022/12/Rectangle-20.png);background-repeat: no-repeat;background-size: cover;">
                    <h3>
                        <i class="bi bi-door-open"></i> Изготовление дверей и мебели
                    </h3>
                    <ul class="usl__item-text">
                        <li>Авторский дизайн и визуализация</li>
                        <li>Выезд на замеры и изготовление согласно индивидуальным размерам</li>
                        <li>Техническая консультация и др.</li>
                        <a href="<?php echo get_page_link('136'); ?>" class="usl__item-link">Подробнее</a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-12 p-3">
                <div class="usl__item" style="background: linear-gradient(120.99deg, rgba(35, 35, 35, 0.95) 15.09%, rgba(17, 17, 17, 0.95) 95.22%), url(http://localhost:8888/wp-content/uploads/2022/12/Rectangle-21.png);background-repeat: no-repeat;background-size: cover;">
                    <h3>
                        <i class="bi bi-award"></i> Юридические услуги
                    </h3>
                    <ul class="usl__item-text">
                        <li>Широкий спектор услуг в области права</li>
                        <li>Разрешение земельных, жилищных, семейных споров</li>
                        <li>Защита по гражданским делам в судах общей юрисдикции и др.</li>
                        <a href="<?php echo get_page_link('138'); ?>" class="usl__item-link">Подробнее</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
