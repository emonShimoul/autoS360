<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<?php if(! is_front_page()){ ?>
<div>
    <h1 class="mx-20 py-48 text-center text-4xl text-red-500">This is Blog Page</h1>
</div>
<?php } ?>

<?php get_footer(); ?>