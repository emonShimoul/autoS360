<?php
/*
Template Name: Cars
*/
?>

<?php get_header(); ?>

<?php if(! is_front_page()){ ?>
    <div class="bg-gray-100">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Page Coming Soon</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center mt-4 min-h-[85vh] bg-gradient-to-r from-[#D42C2E] to-gray-900 text-white">
        <div class="text-center space-y-8">
            <!-- Logo or Icon -->
            <div class="text-6xl">
                🚗
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold font-daysOneRegular uppercase">Our Car Page is Coming Soon!</h1>

            <!-- Description -->
            <p class="text-lg md:text-xl text-gray-200">We're working hard to bring you an amazing experience. Stay tuned for updates and exciting features!</p>

            <!-- Email Subscription Form -->
            <div class="mt-4">
                <form class="flex justify-center space-x-2">
                    <input type="email" placeholder="Enter your email" class="px-4 py-2 w-64 rounded-md border border-gray-300 text-gray-800 focus:ring focus:ring-[#D42C2E] focus:outline-none">
                    <button type="submit" class="px-6 py-2 bg-[#D42C2E] hover:bg-red-700 rounded-md font-semibold text-white">
                        Notify Me
                    </button>
                </form>
            </div>

            <!-- Features or Countdown -->
            <div class="mt-8 space-y-4">
                <h2 class="text-2xl font-semibold">What’s Coming?</h2>
                <ul class="space-y-2 text-gray-200">
                    <li>✅ Car Listings</li>
                    <li>✅ In-depth Reviews</li>
                    <li>✅ Car Comparison Tools</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>

    </div>
<?php } ?>

<?php get_footer(); ?>