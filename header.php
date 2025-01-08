<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>

    <header class="flex justify-between gap-8 items-center px-20 bg-white shadow-lg fixed top-0 w-full z-50 pb-4">

        <?php if(current_theme_supports( "custom-logo" )): ?>
            <div class="header-logo my-2">
                <?php the_custom_logo(); ?>
            </div>
        <?php endif; ?>

        <div class="nav-bar w-2/3">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => false,              // Removes the <div> wrapping the menu
                'menu_class' => 'custom-menu',
                'fallback_cb' => false,            // Disables the fallback menu
                'items_wrap' => '<ul class="%2$s">%3$s</ul>', // Removes ID from the <ul>
            ));
            ?>
        </div>

        <div class="social-icon w-1/3 flex justify-end gap-8 text-3xl cursor-pointer">
            <a href="https://www.facebook.com/autos360live" target="_blank"><i class="fa-brands fa-facebook text-blue-600 hover:scale-125 transform transition duration-300"></i></a>
            <a href="https://www.youtube.com/@autos360bd" target="_blank"><i class="fa-brands fa-youtube text-primaryColor hover:scale-125 transform transition duration-300"></i></a>
            <a href="https://x.com/AutoS360Live" target="_blank"><i class="fa-brands fa-square-x-twitter text-[#E1306C] hover:scale-125 transform transition duration-300"></i></a>
        </div>
    </header>


</head>

<body <?php body_class(); ?>>