<?php require_once("./function/function.php");
    require("./function/config.php");
?>

<div class="whats_app_fixed_btn" id="whatsappBtn">
    <a href="https://wa.me/+917009479881" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
</div>

<!-- !FOOTER -->
<footer id="footer" class="section flex">
    <div class="footer_div">
        <div class="logo_container">
            <a href="../" class="footer_logo flex"><img src="./img/logo.webp" alt="logo_img">LessGoTrippy</a>
        </div>
        <p class="footer_div_dis">LessGoTrippy is a travel community that has been engaging in trekking
            and travelling for a long time. We are a group of experienced professionals who are passionate
            about helping others to explore the world. </p>
    </div>
    <div class="footer_div">
        <p class="footer_div_header">Useful Links</p>
        <ul>
            <li><a href="./">Home</a></li>
            <li><a href="./about-us.php">About Us</a></li>
            <li><a href="./routes.php">Routes</a></li>
            <li><a href="./contact-us.php">Contact Us</a></li>
        </ul>
    </div>
    <div class="footer_div">
        <p class="footer_div_header">Our Quick Contacts</p>
        <div class="quick_contact_form flex">
            <a href="https://www.instagram.com/lesssgotrippy/?igsh=djFxMWtvZ3Rnc2Zl" target="_blank"><i
                    class="fa-brands fa-instagram"></i></a>
            <a href="https://wa.me/+917009479881" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
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

<!-- Captcha script -->
<script src="https://www.google.com/recaptcha/api.js"></script>

</body>


</html>