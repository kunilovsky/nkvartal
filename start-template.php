<?php
/* Template Name: Главная страница */
get_header();
?>
<?php global $nk_opt; ?>
<section class="history mt-0">
    <div class="container">
        <h2 class="sales">
            <i class="bi bi-fire"></i>
            Акции и новости
        </h2>
        <div class="row pt-1 pt-lg-4">
            <?php
            // в массиве задаем все необходимые параметры (более подробно о параметрах чуть ниже)
            $args = array(
                'posts_per_page' => 5,
            );

            // создаем новый объект
            $q = new WP_Query($args);

            // проверяем, существуют ли посты по заданным параметрам (необязательно, но рекомендую)
            if ($q->have_posts()) :

                // затем запускаем цикл
                while ($q->have_posts()) : $q->the_post();

                    // выводим например ссылку на каждый пост
                    echo '
                    <div class="sales__item col-lg-2">
                    <a class="sales__title" href="' . get_permalink() . '">' . get_the_post_thumbnail($id, 'thumbnail', array('class' => 'stories')) . '' . get_the_title() . '</a></div>
                    
                    
                    ';
                endwhile;
            endif;

            // восстанавливаем глобальную переменную $post
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<section class="mt-1">
    <div class="container">
        <h2>
            Продажа недвижимости в Тюмени
        </h2>
        <div class="row pt-2 pt-lg-4">
            <div class="col-lg-2 col-4">
                <div class="cat__item text-center">
                    <a href="">
                        <img src="<?php the_field('cat_1'); ?>" alt="">
                        Новостройки
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-4">
                <div class="cat__item text-center">
                    <a href="">
                        <img src="<?php the_field('cat_2'); ?>" alt="">
                        Вторичное
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-4">
                <div class="cat__item text-center">
                    <a href="">
                        <img src="<?php the_field('cat_3'); ?>" alt="">
                        Дома
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-4">
                <div class="cat__item text-center">
                    <a href="">
                        <img src="<?php the_field('cat_4'); ?>" alt="">
                        Участки
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-4">
                <div class="cat__item text-center">
                    <a href="">
                        <img src="<?php the_field('cat_5'); ?>" alt="">
                        Паркинги
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-4">
                <div class="cat__item text-center">
                    <a href="">
                        <img src="<?php the_field('cat_6'); ?>" alt="">
                        Коммерческая
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center pt-4">
            <a href="" class="btn-link">
                К каталогу
            </a>
        </div>
    </div>
</section>
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
                        <a href="" class="usl__item-link">Подробнее</a>
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
                        <a href="" class="usl__item-link">Подробнее</a>
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
                        <a href="" class="usl__item-link">Подробнее</a>
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
                        <a href="" class="usl__item-link">Подробнее</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-lg-5">
    <div class="container">
        <h2>
            О компании
        </h2>
        <div class="row">
            <div class="col-lg-6 about__text">
                Группа компаний “Новый квартал” — это команда специалистов в сфере девелопмента, способных предоставить широкий спектр услуг от анализа рынка жилой и коммерческой недвижимости, до ремонта помещений и изготовления мебели на заказ по индивидуальным проектам, а также установка дверей.
                <div class="about__text-add d-flex pt-4">
                    <span>
                        с 2012 года на рынке недвижимости
                    </span>
                    <span>
                        Десятки реализованных проектов
                    </span>
                    <span>
                        Надежные партнерские связи
                    </span>
                </div>
            </div>
            <div class="col-lg-6 text-center pt-lg-0 pb-lg-0 pt-4 pb-4">
                <img src="<?php echo $nk_opt["logo"]['url']; ?>" alt="logo">
            </div>
        </div>
        <div class="row align-items-center pt-lg-5 pt-5 text-lg-start text-center">
            <div class="col-lg-3 about__seo">
                <img src="http://localhost:8888/wp-content/uploads/2022/12/avatar.png" alt="Foto">
            </div>
            <div class="col-lg-9  text-start">
                <div class="about__quote mt-3 mt-lg-0">
                    <i class="bi bi-quote"></i>
                    Для того чтобы иметь честь, необходимо заниматься честной деятельностью
                </div>
                <h4 class="pt-lg-4 pt-4 text-lg-start text-center">
                    Владимир Двойников
                </h4>
                <p class="pb-lg-3 pt-1 text-lg-start text-center" style="font-size: 12px;">
                    Основатель компании “Новый Квартал”
                    Эксперт в инвестициях, управлении жилой и коммерческой недвижимостью
                </p>
                <div class="about__seo-social text-lg-start text-center">
                    <a href="http://www.sutkivnovin.ru/" target="_blank"><i class="bi bi-globe2"></i></a>
                    <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="" target="_blank"><i class="bi bi-envelope-at"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-lg-5">
    <div class="container">
        <h2>Контакты</h2>
        <div class="row pt-4">
            <div class="col-lg-6 contact__data">
                <p>
                    <i class="bi bi-geo-alt"></i>г. Тюмень, ул. 50 лет Октября, 57Б, кор.1
                </p>
                <p>
                    <i class="bi bi-telephone"></i> 8 932 326 77 72
                </p>
                <p>
                    <a href="mailto:Dvs.77@bk.ru"><i class="bi bi-mailbox"></i> dvs.77@bk.ru</a>
                </p>
                <button class="btn call-back-modal">
                    Форма связи
                </button>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/55/tyumen/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Тюмень</a><a href="https://yandex.ru/maps/55/tyumen/house/ulitsa_50_let_oktyabrya_57bk1/YkwYcw5kTEcDQFttfX11cHtkbQ==/?ll=65.594524%2C57.141779&utm_medium=mapframe&utm_source=maps&z=16" style="color:#eee;font-size:12px;position:absolute;top:14px;">Агентсво Недвижимости "Новый Квартал"</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUjeKA0OB" class="maps" frameborder="1" allowfullscreen="true" style="position:relative;border-radius:10px"></iframe></div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
