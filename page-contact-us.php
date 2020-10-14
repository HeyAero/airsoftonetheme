<?php
get_header();
the_post(); ?>

<section class="container mx-auto py-4 px-16 banner">
    <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(http://airsoftone.test/wp-content/uploads/2020/09/airsoftone2.png)">
        <p class="text-4xl font-bold text-center">Contact Us</p>
    </div>
</section>

<section class="container mx-auto py-4 px-16 banner flex justify-center">
    <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-blue-400 text-sm font-bold mb-2" for="grid-first-name">
                    Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter here">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-blue-400 text-sm font-bold mb-2" for="grid-first-name">
                    Subject
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter here">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-blue-400 text-sm font-bold mb-2" for="grid-first-name">
                    Message
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter here">
            </div>
        </div>
        <a href="#" class="flex flex-wrap justify-center bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 border-b-4 border-blue-900 hover:border-blue-800 rounded">
            Send Now
        </a>
    </form>
</section>

<?php
get_footer();
wp_reset_postdata();
