<?php
get_header();
the_post(); ?>

<section class="container mx-auto py-4 px-16 banner">
    <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(http://airsoftone.test/wp-content/uploads/2020/09/airsoftone2.png)">
        <p class="text-4xl font-bold text-center">Site Information and Rules</p>
    </div>
</section>

<section class="container mx-auto py-4 px-16 banner">
    <div class="">
        <h1 class="text-2xl text-center"><?php the_title(); ?></h1>
        <p class="text-xl"><?php the_content(); ?></p>
    </div>
</section>

<section class="container mx-auto py-4 px-16 banner">
    <div class="">
        <h1 class="text-2xl text-center">Rules</h1>
        <p class="text-xl"><?php the_content(); ?></p>
    </div>

    <div class="block lg:grid lg:grid-cols-4 lg:gap-4 text-center py-4">
        <div class="col-span-1 bg-gray-900 my-4">
            <h1 class="text-lg">Rule #1</h1>
            <hr>
            <p class="p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="col-span-1 bg-gray-900 my-4">
            <h1 class="text-lg">Rule #2</h1>
            <hr>
            <p class="p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
        <div class="col-span-1 bg-gray-900 my-4">
            <h1 class="text-lg">Rule #3</h1>
            <hr>
            <p class="p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
        <div class="col-span-1 bg-gray-900 my-4">
            <h1 class="text-lg">Rule #4</h1>
            <hr>
            <p class="p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
    </div>
</section>

<section class="container mx-auto py-4 px-16 banner">
    <h1 class="text-2xl text-center">FPS Limits</h1>
    <p class="text-xl"><?php the_content(); ?></p>
    <div class="hidden md:flex md:justify-center">
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Weapon Type</th>
                    <th class="px-4 py-2">MED</th>
                    <th class="px-4 py-2">Joule Limit</th>
                    <th class="px-4 py-2">0.2g bb</th>
                    <th class="px-4 py-2">0.25g bb</th>
                    <th class="px-4 py-2">0.3g bb</th>
                    <th class="px-4 py-2">0.4g bb</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-900">
                    <td class="border px-4 py-2">Assault / Pistols</td>
                    <td class="border px-4 py-2">N/A</td>
                    <td class="border px-4 py-2">1.15</td>
                    <td class="border px-4 py-2">350</td>
                    <td class="border px-4 py-2">310</td>
                    <td class="border px-4 py-2">280</td>
                    <td class="border px-4 py-2">N/A</td>
                </tr>
                <tr class="bg-gray-900">
                    <td class="border px-4 py-2">DMR</td>
                    <td class="border px-4 py-2">30m</td>
                    <td class="border px-4 py-2">1.5</td>
                    <td class="border px-4 py-2">400</td>
                    <td class="border px-4 py-2">360</td>
                    <td class="border px-4 py-2">320</td>
                    <td class="border px-4 py-2">280</td>
                </tr>
                <tr class="bg-gray-900">
                    <td class="border px-4 py-2">Assault / Pistols</td>
                    <td class="border px-4 py-2">30m</td>
                    <td class="border px-4 py-2">2.3</td>
                    <td class="border px-4 py-2">500</td>
                    <td class="border px-4 py-2">440</td>
                    <td class="border px-4 py-2">400</td>
                    <td class="border px-4 py-2">350</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php
get_footer();
wp_reset_postdata();