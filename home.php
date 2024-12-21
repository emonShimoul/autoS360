<?php
get_header();
?>

<div>
        <!-- Page Header -->
        <header class="bg-gradient-to-r from-[#D42C2E] to-gray-900 text-white py-6 mt-4">
            <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl text-white font-bold font-daysOneRegular uppercase">Our Blog</h1>
            <p class="text-blue-100 mt-2">Stay updated with our latest articles</p>
            </div>
        </header>

        <!-- Blog Posts Section -->
        <main class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
            <!-- Single Blog Post -->
            <article class="bg-white shadow-md rounded-lg overflow-hidden">
                <?php if (has_post_thumbnail()) { ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover">
                <?php } else { ?>
                <img src="https://via.placeholder.com/400x200" alt="Placeholder Image" class="w-full h-48 object-cover">
                <?php } ?>
                <div class="p-6">
                <h2 class="text-xl font-bold text-gray-800"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="text-gray-600 text-sm mt-2">Posted on <?php echo get_the_date(); ?></p>
                <div class="mt-4 h-32 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-blue-600 hover:underline font-semibold">Read More</a>
                </div>
            </article>
            <?php
                }
            } else {
                echo '<p class="text-gray-600">No posts found.</p>';
            }
            ?>
            </div>

            <!-- pagination -->
            <div class="container mx-auto px-4 mt-8">
                <div class="flex justify-center">
                    <nav class="inline-flex space-x-1 shadow-sm rounded-md" aria-label="Pagination">
                        <?php
                        $pagination_links = paginate_links(array(
                            'type' => 'array',
                            'mid_size' => 2,
                            'prev_text' => '&laquo;',
                            'next_text' => '&raquo;',
                        ));

                        if ($pagination_links) {
                            foreach ($pagination_links as $link) {
                                if (strpos($link, 'current') !== false) {
                                    echo '<span class="px-4 py-2 text-white bg-blue-600 border border-gray-300 rounded-md">' . strip_tags($link) . '</span>';
                                } else {
                                    echo str_replace(
                                        '<a',
                                        '<a class="px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded-md hover:bg-blue-500 hover:text-white"',
                                        $link
                                    );
                                }
                            }
                        }
                        ?>
                    </nav>
                </div>
            </div>
        </main>
    </div>

<?php
get_footer();