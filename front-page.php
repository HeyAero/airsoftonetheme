<?php
get_header();
the_post(); ?>

<section class="container mx-auto py-4 px-16 banner">
    <div class="sliderAx h-auto">
        <div id="slider-1" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(http://airsoftone.test/wp-content/uploads/2020/09/airsoftone2.png)">
                <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">Skirmish</p>
                    <p class="text-3xl font-bold">Games Days</p>
                    <p class="text-2xl mb-10 leading-none">We run fortnightly games on weekends</p>
                    <a href="/events" class="bg-blue-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Book Now</a>
                </div>
            </div>
            <br>
        </div>
        <div id="slider-2" class="container mx-auto">
            <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(http://airsoftone.test/wp-content/uploads/2020/09/airsoftone1.png)">
                <p class="font-bold text-sm uppercase">Special Event</p>
                <p class="text-3xl font-bold">24 Hour Event</p>
                <p class="text-2xl mb-10 leading-none">Join us in our special event</p>
                <a href="/events" class="bg-blue-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Book Now</a>
            </div>
            <br>
        </div>
    </div>
     <div  class="flex justify-between w-12 mx-auto pb-2">
         <button id="sButton1" onclick="sliderButton1()" class="bg-blue-800 rounded-full w-4 pb-2"></button>
         <button id="sButton2" onclick="sliderButton2() " class="bg-blue-800 rounded-full w-4 p-2"></button>
     </div>
</section>

<section class="container mx-auto py-4 px-16">
    <div class="">
        <h1 class="text-2xl text-center"><?php the_title(); ?></h1>
        <p class="text-xl"><?php the_content(); ?></p>
    </div>
</section>

<section class="container mx-auto py-4 px-16">
    <h1 class="text-2xl text-center">Upcoming Events</h1>
    <div class="block lg:flex lg:justify-between">
    <?php

        global $post;

        $events = tribe_get_events( [
            'posts_per_page' => 3,
            'start_date' => 'now',
        ] );

        foreach ($events as $post) {
            setup_postdata($post);
        ?>
        <div class="grid grid-cols-1 bg-white event-box" style="background-image: url(http://airsoftone.test/wp-content/uploads/2020/09/airsoftone3.png)">
            <div class="col-start-1 event-box-img flex items-start justify-center content-center flex-wrap my-10">
                <div class="border-solid border-4 border-blue-500 m-5 date-holder text-center font-bold p-5">
                    <p class="text-xl"><?php echo tribe_get_start_date($post, true, 'M jS') ?></p>
                    <p class="text-lg"><?php echo tribe_get_start_date($post, true, 'Y') ?></p>
                </div>
            </div>
            <div class="col-start-1 flex justify-center items-end event-info py-4 bg-gray-900">
                <div class="grid grid-cols-1 text-center text-lg font-bold">
                    <div class="col-start-1 py-1">
                        <a href="<?php the_permalink($post) ?>">
                            <h2><?php echo $post->post_title ?></h2>
                        </a>
                    </div>
                    <div class="col-start-1 text-white font-normal py-1">
                        <p><?php echo tribe_get_start_date($post) ?></p>
                    </div>
                    <div class="col-start-1 py-3">
                        <a href="<?php the_permalink($post) ?>" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 border-b-4 border-blue-900 hover:border-blue-800 rounded">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <br>
    <div class="flex justify-center">
        <a class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 border-b-4 border-blue-900 hover:border-blue-800 rounded">
            VIEW ALL EVENTS
        </a>
    </div>
</section>

<?php
get_footer();
wp_reset_postdata();