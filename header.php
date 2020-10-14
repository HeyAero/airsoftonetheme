<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, inisital-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4fdf74d490.js" crossorigin="anonymous"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
    <header class="">
        <div class="flex justify-between items-center navbar-main lg:px-32 md:px-16 px-8 py-4">
            <div class="">
                <a href="/home">
                    <img src="http://airsoftone.test/wp-content/uploads/2020/09/logo.png" alt="Logo" class="h-24">
                </a>
            </div>
            <div class="hidden md:flex">
                <a href="/home" class="mr-4">Home</a>
                <a href="/events" class="mr-4">Events</a>
                <a href="/gallery" class="mr-4">Gallery</a>
                <a href="/site-information" class="mr-4">Site Information</a>
                <a href="/contact-us" class="">Contact Us</a>
            </div>
            <div class="md:hidden">
                <a class=""><i class="fas fa-bars fa-2x"></i></a>
            </div>
        </div>
    </header>
