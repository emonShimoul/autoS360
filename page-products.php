<?php
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 10,
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
        <div class="product-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endwhile;
    wp_reset_postdata();
else :
    echo 'No products found.';
endif;
?>
