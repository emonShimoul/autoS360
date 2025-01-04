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
            <!-- Product Image Slider -->
            <div class="w-full lg:w-1/2">
                <div class="slider-container">
                    <!-- Main Image Display -->
                    <div id="main-image" class="overflow-hidden rounded-lg shadow-md mb-4">
                        <?php
                        $image1 = get_field('product_image_1');
                        $image2 = get_field('product_image_2');
                        $image3 = get_field('product_image_3');
                        ?>

                        <?php if ($image1): ?>
                            <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" class="w-full h-auto object-cover main-image" data-image="1">
                        <?php endif; ?>

                        <?php if ($image2): ?>
                            <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" class="w-full h-auto object-cover main-image" data-image="2" style="display: none;">
                        <?php endif; ?>

                        <?php if ($image3): ?>
                            <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" class="w-full h-auto object-cover main-image" data-image="3" style="display: none;">
                        <?php endif; ?>
                    </div>

                    <!-- Thumbnail Slider -->
                    <div class="thumbnail-slider flex gap-2">
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

<!-- Slider Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const thumbnails = document.querySelectorAll('.thumbnail'); // Get all thumbnail images
        const mainImages = document.querySelectorAll('.main-image'); // Get all images in the main image container

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function () {
                // Get the index of the clicked thumbnail (using data-thumbnail)
                const selectedImage = this.getAttribute('data-thumbnail');

                // Hide all images
                mainImages.forEach(image => {
                    image.style.display = 'none';
                });

                // Show the selected image
                const selectedMainImage = document.querySelector(`.main-image[data-image="${selectedImage}"]`);
                if (selectedMainImage) {
                    selectedMainImage.style.display = 'block';
                }
            });
        });
    });
</script>

<?php get_footer(); ?>