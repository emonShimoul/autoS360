<?php get_header(); ?>

<div class="product">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <div class="flex gap-20 ms-28 my-20 justify-around">
            <div class="product-image w-1/3">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="w-2/3">
                <h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>
                <div class="product-description mb-4">
                    <?php the_content(); ?>
                </div>
                <div class="product-model">
                    <strong>Model: </strong>
                    <?php echo get_post_meta(get_the_ID(), '_product_model', true); ?>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
