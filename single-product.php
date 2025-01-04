<?php get_header(); ?>

<div class="container mx-auto px-4 py-12">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Product Header -->
        <header class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-800"><?php the_title(); ?></h1>
            <p class="text-gray-500 text-lg mt-2">
                <strong>Model: </strong><?php echo get_post_meta(get_the_ID(), '_product_model', true); ?>
            </p>
        </header>

        <!-- Product Content -->
        <div class="flex flex-wrap lg:flex-nowrap gap-12 justify-center items-start">
            <!-- Product Image -->
            <div class="w-full lg:w-1/2">
                <div class="overflow-hidden rounded-lg shadow-md">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="w-full h-auto object-cover">
                    <?php else : ?>
                        <img src="https://via.placeholder.com/800x600" alt="Placeholder Image" class="w-full h-auto object-cover">
                    <?php endif; ?>
                </div>
            </div>

            <!-- Product Details -->
            <div class="w-full lg:w-1/2">
                <!-- Product Description -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold mb-4">Description</h2>
                    <div class="text-gray-700 leading-relaxed">
                        <?php the_content(); ?>
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-8">
                    <p class="text-gray-500 text-lg">
                        <strong>Model: </strong><?php echo get_post_meta(get_the_ID(), '_product_model', true); ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- Back to Products Button -->
        <div class="text-center mt-12">
            <a href="<?php echo get_post_type_archive_link('product'); ?>" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700">
                Back to All Products
            </a>
        </div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>