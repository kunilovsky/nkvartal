<?php
/* Template Name: Главная страница */
get_header();
?>
<section class="history">
    <div class="container">
        <h2 class="sales">
            <i class="bi bi-fire"></i>
            Акции и новости
        </h2>
        <div class="row pt-0 pt-lg-4">
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
<section>
    <div class="container">
        <h2>
            Продажа недвижимости в Тюмени
        </h2>
        <div class="row">
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
    </div>
</section>
<?php
get_footer();
