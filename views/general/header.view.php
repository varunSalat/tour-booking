<?php require_once("./function/function.php");
require("./function/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LesssGoTrippy | Tours & Travels Company</title>
    <meta name="description"
        content="LesssGoTrippy is a travel community that has been engaging in trekking and travelling for a long time. We are a group of experienced professionals who are passionate about helping others to explore the world.">
    <meta name="keywords" content="LesssGoTrippy, Tours & Travels Company, Trekking, Hiking">
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
    <!-- Google recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LfgKAsqAAAAAFUgWZDvF_UvyCDlsP6-BYhREs9q"></script>
    </script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <div class="preloader_container">
        <div class="preloader_inner_container">
            <figure>
                <img src="./img/logo-with-bg.jpg" alt="prealoder">
                <img src="./img/loader.gif" alt="prealoder" id="line-loader">
            </figure>
        </div>
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