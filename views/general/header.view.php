<?php require_once("./function/function.php");
require("./function/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trail Blenders | Tours & Travels Company</title>
    <meta name="description"
        content="Trail blenders is a travel community that has been engaging in trekking and travelling for a long time. We are a group of experienced professionals who are passionate about helping others to explore the world.">
    <meta name="keywords" content="Trail Blenders, Tours & Travels Company, Trekking, Hiking">
    <!-- !FEVICON ICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
    <!-- !FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- !SWIPER JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <!-- !LOCAL CSS -->
    <link rel="stylesheet" href="./styles/style.css?v=<?=$version?>">
</head>

<body>
    <div class="preloader_container">
        <img src="./img/preloader.gif" alt="prealoder">
    </div>
    <header id="header">
        <nav id="secondery_nav" class="flex">
            <div class="left_header flex">
                <a href="https://goo.gl/maps/R9GEopZdDgiwMsua6" target="_blank" class="flex"><i
                        class="fa-solid fa-location-dot"></i>B-59, Bhumipark, Vavol, Gandhinagar, Gujarat-382016</a>
                <div class="phone_container">
                    <a href="tel:+919624860420"><i class="fa-solid fa-phone"></i>+91 962 486 0420</a>
                </div>
            </div>
            <div class="line"></div>
            <div class="right_container flex">
                <a href="https://instagram.com/trailblenders?igshid=YmMyMTA2M2Y=" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                <a href="https://wa.me/+919624860420" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100091331612532&mibextid=ZbWKwL" target="_blank"><i
                        class="fa-brands fa-facebook-square"></i></a>
            </div>
        </nav>
        <nav id="main_nav" class="flex">
            <div class="burger_container">
                <i></i>
                <i></i>
                <i></i>
            </div>
            <div class="logo_container">
                <a href="./" id="text_logo"><img src="./img/logo.webp" alt="logo_img"></a>
            </div>
            <ul class="main_nav_link_container flex">
                <li><a href="./">Home</a></li>
                <li><a href="./tour.php">Tours</a></li>
                <li><a href="./track.php">Treks</a></li>
                <li><a href="./contact-us.php">Contact Us</a></li>
            </ul>
            <div class="three_dot_container">
                <i class="dot-1"></i>
                <i class="dot-2"></i>
                <i class="dot-3"></i>
            </div>
        </nav>
    </header>