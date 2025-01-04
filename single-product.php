<?php get_header(); ?>

<div class="container mx-auto px-4 pb-12">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Product Header -->
        <header class="text-center mt-4 mb-12 bg-gradient-to-r from-[#D42C2E] to-gray-900 text-white py-6">
            <h1 class="text-4xl text-white font-bold font-daysOneRegular uppercase"><?php the_title(); ?></h1>
            <p class="text-blue-100 mt-2">
                <strong>Model: </strong><?php echo get_post_meta(get_the_ID(), '_product_model', true); ?>
            </p>
        </header>

        <!-- Product Content -->
        <div class="flex flex-wrap lg:flex-nowrap gap-12 justify-center items-start">
            <div class="w-full lg:w-1/2">
                <!-- Product Image (Main Image) -->
                <div class="">
                    <div class="main-image-container">
                        <?php
                        $image1 = get_field('product_image_1');
                        $image2 = get_field('product_image_2');
                        $image3 = get_field('product_image_3');
                        ?>

                        <?php if ($image1): ?>
                            <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" class="w-full h-auto object-cover main-image" data-image="1">
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Thumbnail Slider (below main image) -->
                <div class="mt-4">
                    <div class="thumbnail-slider flex gap-2 mb-4 overflow-x-auto">
                        <?php if ($image1): ?>
                            <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" class="thumbnail w-20 h-20 cursor-pointer border border-gray-300 rounded" data-thumbnail="1">
                        <?php endif; ?>
                        <?php if ($image2): ?>
                            <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" class="thumbnail w-20 h-20 cursor-pointer border border-gray-300 rounded" data-thumbnail="2">
                        <?php endif; ?>
                        <?php if ($image3): ?>
                            <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" class="thumbnail w-20 h-20 cursor-pointer border border-gray-300 rounded" data-thumbnail="3">
                        <?php endif; ?>
                    </div>
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

<!-- Image Popup -->
<div id="popup" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
    <div class="popup-content bg-white rounded-lg shadow-md p-4">
        <img id="popup-image" src="" alt="Popup Image" class="w-full h-auto">
        <button id="close-popup" class="absolute top-2 right-2 text-white bg-red-600 p-2 rounded-full">X</button>
    </div>
</div>


<?php get_footer(); ?>