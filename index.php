<?php get_header(); ?>

<!-- front page design starts -->
<?php if(is_front_page()){ ?>

<?php get_template_part("slider"); ?>
<?php get_template_part("banner"); ?>
<?php get_template_part("services"); ?>
<?php get_template_part("testimonials"); ?>
<?php get_template_part("contact"); ?>

<?php } ?>
<!-- front page design ends -->

<!-- display posts in the blog page -->
<?php get_template_part("page-blogs"); ?>

<?php get_footer(); ?>
</body>
</html>