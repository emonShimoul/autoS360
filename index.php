<?php
get_header();

if (is_home()) {
    
    ?>
    
    
    
<?php
} else {
    echo '<p>This is the default index template.</p>';
}

get_footer();