<?php require_once("./function/function.php");
    require("./function/config.php");
?>

<div class="whats_app_fixed_btn" id="whatsappBtn">
    <a href="https://wa.me/+919624860420" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
</div>

<!-- !FOOTER -->
<footer id="footer" class="section flex">
    <div class="footer_div">
        <div class="logo_container">
            <a href="./index.php" class="footer_logo flex"><img src="./img/logo.webp" alt="logo_img">LesssGoTrippy</a>
        </div>
        <p class="footer_div_dis">LessGoTrippy is a travel community that has been engaging in trekking and travelling
            for a long time. We are a group of experienced professionals who are passionate about helping others to
            explore the world. </p>
    </div>
    <div class="footer_div">
        <p class="footer_div_header">Navigation Links</p>
        <ul>
            <li><a href="./">Home</a></li>
            <li><a href="./about-us.php">About Us</a></li>
            <li><a href="./track.php">Routes</a></li>
            <li><a href="./contact-us.php">Contact Us</a></li>
        </ul>
    </div>
    <div class="footer_div">
        <p class="footer_div_header">Useful Links</p>
        <ul>
            <li><a href="./privacy-policy.php">Privacy Policy</a></li>
            <li><a href="./terms-condition.php">Terms & Conditions</a></li>
        </ul>
    </div>
    <div class="footer_div">
        <p class="footer_div_header">Social Links</p>
        <div class="quick_contact_form flex">
            <a href="https://instagram.com/trailblenders?igshid=YmMyMTA2M2Y=" target="_blank"><i
                    class="fa-brands fa-instagram"></i></a>
            <a href="https://wa.me/+919624860420" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100091331612532&mibextid=ZbWKwL" target="_blank"><i
                    class="fa-brands fa-facebook-square"></i></a>
        </div>
    </div>
</footer>

<!-- !SWIPER JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- !SMTP LINK-->
<script src="https://smtpjs.com/v3/smtp.js"></script>
<!-- !GSAP -->

<!-- !LOCAL JS -->
<script src="./scripts/main.js?v=<?=$version?>"></script>
</body>


</html>