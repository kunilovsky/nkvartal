<?php /*Template Name: Новости */
get_header();
?>
<div class="container mt-3">
    <div class="row">
        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 12,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'cat' => 26, 27
        );
        $q = new WP_Query($args);
        ?> <?php if ($q->have_posts()) : ?>
            <?php while ($q->have_posts()) : $q->the_post(); ?>
                <div class="col-lg-6 mt-3 mt-lg-0">
                    <div class="estate__card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="estate__card-img" style="background-image: url(<?php the_post_thumbnail_url('large') ?>);">

                            </div>
                            <div class="estate__card-content">
                                <h3><?php the_title(); ?></h3>
                                <span class="entry-date"><i class="bi bi-clock-fill"></i> <?php echo get_the_date(); ?></span>
                                <div class="news__card-desc">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>

                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>
</div>
<?php
get_footer();
