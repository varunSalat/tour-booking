<?php require("./function/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LesssGoTrippy | <?=str_replace('_', ' ',  $_GET["trip"])?></title>
    <meta name="description"
        content="We are a group of experienced professionals who are passionate about helping others to explore the world.">
    <meta name="keywords" content="keywords" content="LesssGoTrippy, Tours & Travels Company, Cab Booking">
    <!-- !FEVICOND ICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./manifest.json">
    <!-- !FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- !SWIPER JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <!-- !LOCAL CSS -->
    <link rel="stylesheet" href="./styles/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="./styles/packge.css?v=<?=$version?>">
    <!-- Google recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LfgKAsqAAAAAFUgWZDvF_UvyCDlsP6-BYhREs9q"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6H08ZSPPF9"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-6H08ZSPPF9');
    </script>
</head>

<body>
    <div class="preloader_container">
        <div class="preloader_inner_container">
            <figure>
                <img src="./img/logo-with-bg.webp" alt="prealoder">
                <img src="./img/loader.gif" alt="prealoder" id="line-loader">
            </figure>
        </div>
    </div>
    <header id="header">
        <nav id="main_nav" class="flex">

            <div class="logo_container">
                <a href="./" id="text_logo" class="flex"><img src="./img/logo.webp" alt="logo_img">LesssGoTrippy</a>
            </div>
            <ul class="main_nav_link_container flex">
                <li><a href="./">Home</a></li>
                <li><a href="./about-us.php">About Us</a></li>
                <li><a href="./routes.php">Routes</a></li>
                <li><a href="./contact-us.php">Contact Us</a></li>
            </ul>
            <div class="burger_container">
                <i></i>
                <i></i>
                <i></i>
            </div>
            <div class="three_dot_container">
                <i class="dot-1"></i>
                <i class="dot-2"></i>
                <i class="dot-3"></i>
            </div>
        </nav>
    </header>