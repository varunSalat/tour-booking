<?php require("./function/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LessGoTrippy | <?=str_replace('_', ' ',  $_GET["trip"])?></title>
    <meta name="description"
        content="Trailblenders is a renowned travel community that has been at the forefront of trekking and explorations for many years. ">
    <meta name="keywords" content="LessGoTrippy, Tours & Travels Company, Trekking, Hiking">
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
</head>

<body>
    <div class="preloader_container">
        <img src="./img/preloader.gif" alt="prealoder">
    </div>
    <header id="header">
        <nav id="main_nav" class="flex">
            <div class="burger_container">
                <i></i>
                <i></i>
                <i></i>
            </div>
            <div class="logo_container">
                <a href="./" id="text_logo" class="flex"><img src="./img/logo.webp" alt="logo_img">LesssGoTrippy</a>
            </div>
            <ul class="main_nav_link_container flex">
                <li><a href="./">Home</a></li>
                <li><a href="./about-us.php">About Us</a></li>
                <li><a href="./routes.php">Routes</a></li>
                <li><a href="./contact-us.php">Contact Us</a></li>
            </ul>
            <div class="three_dot_container">
                <i class="dot-1"></i>
                <i class="dot-2"></i>
                <i class="dot-3"></i>
            </div>
        </nav>
    </header>