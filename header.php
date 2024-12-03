<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>

    <header class="flex justify-between gap-8 items-center px-20">

        <!-- <h4 class="text-primaryColor font-daysOneRegular text-3xl">AutoS360</h4> -->

        <?php if(current_theme_supports( "custom-logo" )): ?>
            <div class="header-logo my-2">
                <?php the_custom_logo(); ?>
            </div>
        <?php endif; ?>

        <!-- <div class="navbar w-2/3">
            <ul class="font-semibold flex gap-8 uppercase text-sm cursor-pointer">
                <li class="hover:scale-125 transform transition duration-300 hover:text-primaryColor">Home</li>
                <li class="hover:scale-125 transform transition duration-300 hover:text-primaryColor">Cars</li>
                <li class="hover:scale-125 transform transition duration-300 hover:text-primaryColor">Services</li>
                <li class="hover:scale-125 transform transition duration-300 hover:text-primaryColor">Blog</li>
                <li class="hover:scale-125 transform transition duration-300 hover:text-primaryColor"><a href="#contact-us">Contact Us</a></li>
            </ul>
        </div> -->

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
            <i class="fa-brands fa-facebook text-blue-600 hover:scale-125 transform transition duration-300"></i>
            <i class="fa-brands fa-youtube text-primaryColor hover:scale-125 transform transition duration-300"></i>
            <i class="fa-brands fa-instagram text-[#E1306C] hover:scale-125 transform transition duration-300"></i>
        </div>
    </header>


</head>

<body <?php body_class(); ?>>