<?php
get_header();
?>

<div>
    <!-- Page Header -->
    <header class="bg-gradient-to-r from-[#D42C2E] to-gray-900 text-white py-8 mt-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold font-daysOneRegular uppercase"><?php the_title(); ?></h1>
            <p class="text-blue-100 mt-2">
                Posted on <?php echo get_the_date(); ?> 
                by <?php echo get_the_author() ?: 'Unknown Author'; ?>
            </p>
        </div>
    </header>

    <!-- Single Blog Content Section -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <?php if (has_post_thumbnail()) { ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="w-full h-72 object-cover">
            <?php } ?>

            <div class="p-6">
                <article>
                    <!-- Blog Content -->
                    <div class="prose lg:prose-xl max-w-none">
                        <?php the_content(); ?>
                    </div>

                    <!-- Post Meta -->
                    <div class="mt-6 border-t pt-4 text-gray-600 text-sm">
                        <p><strong>Category:</strong> <?php the_category(', '); ?></p>
                        <p><strong>Tags:</strong> <?php the_tags('', ', ', ''); ?></p>
                    </div>
                </article>
            </div>
        </div>

        <!-- Author Bio -->
        <div class="mt-12 bg-gray-100 p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <?php 
                    // Display author avatar with a fallback to a default image
                    echo get_avatar(get_the_author_meta('ID'), 64, '', '', ['class' => 'rounded-full']); 
                    ?>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-bold text-gray-800">
                        <?php 
                        // Display author name with a fallback text
                        echo get_the_author_meta('display_name') ?: 'Unknown Author'; 
                        ?>
                    </h3>
                    <p class="text-gray-600">
                        <?php 
                        // Display author description with a fallback message
                        echo get_the_author_meta('description') ?: 'No bio available for this author.'; 
                        ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- Related Posts -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800">Related Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
                <?php
                $related_posts = new WP_Query([
                    'category__in' => wp_get_post_categories(get_the_ID()),
                    'post__not_in' => [get_the_ID()],
                    'posts_per_page' => 3,
                ]);

                if ($related_posts->have_posts()) {
                    while ($related_posts->have_posts()) {
                        $related_posts->the_post();
                ?>
                        <article class="bg-white shadow-md rounded-lg overflow-hidden">
                            <?php if (has_post_thumbnail()) { ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover">
                            <?php } else { ?>
                                <img src="https://via.placeholder.com/400x200" alt="Placeholder Image" class="w-full h-48 object-cover">
                            <?php } ?>
                            <div class="p-4">
                                <h3 class="text-lg font-bold text-gray-800"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="text-gray-600 text-sm mt-2"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-blue-600 hover:underline font-semibold">Read More</a>
                            </div>
                        </article>
                <?php
                    }
                } else {
                    echo '<p class="text-gray-600">No related posts found.</p>';
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </main>
</div>

<?php
get_footer();