<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>

    <header class="flex justify-between items-center px-20">
        <div class="navbar w-1/2">
            <ul class="font-semibold flex gap-8 uppercase text-sm cursor-pointer">
                <li class="hover:scale-125 transform transition duration-300 hover:text-primaryColor">Home</li>
                <li class="hover:scale-125 transform transition duration-300 hover:text-primaryColor"><a href="#contact-us">Contact Us</a></li>
                <li class="hover:scale-125 transform transition duration-300 hover:text-primaryColor">Cars</li>
                <li class="hover:scale-125 transform transition duration-300 hover:text-primaryColor">Blog</li>
                <li class="hover:scale-125 transform transition duration-300 hover:text-primaryColor">Others</li>
            </ul>
        </div>

        <div class="social-icon w-1/2 flex justify-end gap-8 text-3xl cursor-pointer">
            <i class="fa-brands fa-facebook text-blue-600 hover:scale-125 transform transition duration-300"></i>
            <i class="fa-brands fa-youtube text-primaryColor hover:scale-125 transform transition duration-300"></i>
            <i class="fa-brands fa-instagram text-[#E1306C] hover:scale-125 transform transition duration-300"></i>
        </div>
    </header>


</head>

<body <?php body_class(); ?>>