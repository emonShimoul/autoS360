<?php get_header(); ?>

<div>
    <!-- Page Header -->
    <header class="bg-gradient-to-r from-[#D42C2E] to-gray-900 text-white py-6 mt-20">
        <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl text-white font-bold font-daysOneRegular uppercase">Our Cars</h1>
        <p class="text-blue-100 mt-2">Stay updated with our latest cars</p>
        </div>
    </header>


    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="bg-gray-200 shadow-md rounded-lg overflow-hidden">
                        <div>
                            <?php if (has_post_thumbnail()) { ?>
                                <div class="px-6 pt-6">
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 rounded-lg">
                                </div>
                            <?php } else { ?>
                                <div class="px-6 pt-6">
                                    <img src="https://via.placeholder.com/400x200" alt="Placeholder Image" class="w-full h-48 object-cover rounded-lg">
                                </div>
                            <?php } ?>
                        </div>
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-800"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="text-gray-600 mt-2"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-blue-600 hover:underline font-semibold">View Details</a>
                        </div>
                    </div>
                <?php endwhile;
            else :
                echo '<p class="text-gray-600">No products found.</p>';
            endif; ?>
        </div>
    </main> 
</div>

<?php get_footer(); ?>