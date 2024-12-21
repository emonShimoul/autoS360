<?php
get_header();

if (is_home()) {
    // Display blog posts
    ?>
    
    
    
<?php
} else {
    // Fallback for other pages
    echo '<p>This is the default index template.</p>';
}

get_footer();