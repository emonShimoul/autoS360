<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>

    <div class="navbar">
        <ul class="font-semibold flex gap-8 uppercase px-20 text-sm cursor-pointer">
            <li class="hover:scale-110 transform transition duration-300 hover:text-primaryColor">Home</li>
            <li class="hover:scale-110 transform transition duration-300 hover:text-primaryColor">Contact Us</li>
            <li class="hover:scale-110 transform transition duration-300 hover:text-primaryColor">Cars</li>
            <li class="hover:scale-110 transform transition duration-300 hover:text-primaryColor">Blog</li>
            <li class="hover:scale-110 transform transition duration-300 hover:text-primaryColor">Others</li>
        </ul>
    </div>


</head>

<body <?php body_class(); ?>>