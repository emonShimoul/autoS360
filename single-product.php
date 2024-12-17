<?php get_header(); ?>

<div class="product">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="product-image">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="product-description">
            <?php the_content(); ?>
        </div>
        <div class="product-price">
            <strong>Price: </strong>
            <?php echo get_post_meta(get_the_ID(), '_product_price', true); ?>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
