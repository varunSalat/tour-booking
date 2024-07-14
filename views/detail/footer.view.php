            <?php require("./function/config.php");?>
            <!-- !CONTACT US SECTION -->
            <div class="whats_app_fixed_btn" id="whatsappBtn">
                <a href="https://wa.me/+917009479881" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <div id="contact_us" class="section">
                <div class="section_header">
                    <p>Contact Us</p>
                </div>

                <div class="contact_us_container flex">
                    <form action="javascript: validation()" id="form">
                        <div class="input_container">
                            <input type="text" id="general_form_name" placeholder="Your Name*" required>
                            <p class="generalFromError">This is an error</p>
                        </div>
                        <div class="input_container">
                            <input type="email" id="generalFormEmail" placeholder="Email Address">
                            <p class="generalFromError">This is an error</p>
                        </div>
                        <div class="input_container">
                            <input type="text" id="generalFormPhone" placeholder="Phone Number*" required>
                            <p class="generalFromError">This is an error</p>
                        </div>
                        <div class="input_container">
                            <textarea name="text" id="generalFormtext" placeholder="Your Enquiry*" cols="30" rows="10"
                                required></textarea>
                            <p class="generalFromError">This is an error</p>
                        </div>
                        <button id="form_submit_btn" class="flex btn" type="submit">Send Request<i
                                class="fa-solid fa-angles-right"></i></button>
                    </form>
                    <div class="quick_contacts_container">
                        <div class="quick_contact_card flex">
                            <i class="fa-brands fa-whatsapp"></i>
                            <a href="https://wa.me/+917009479881" target="_blank">+91 700 947 9881</a>
                        </div>
                        <div class="quick_contact_card flex">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:info.lesssgotrippy@gmail.com" class="flex mail-text">Send Email <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="quick_contact_card flex">
                            <i class="fa-solid fa-location-dot"></i>
                            <a target="_blank">27/1, New Rishi nagar, Ludhiyana, Punjab, 141007</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- !FOOTER -->
            <footer id="footer" class="section flex">
                <div class="footer_div">
                    <div class="logo_container">
                        <a href="../" class="footer_logo flex"><img src="./img/logo.webp"
                                alt="logo_img">LesssGoTrippy</a>
                    </div>
                    <p class="footer_div_dis">LesssGoTrippy offers a cost-effective and dependable solution for booking
                        bus and cab services, ensuring your travel needs are met with ease and reliability. </p>
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
                    <p class="footer_div_header">Other Links</p>
                    <ul>
                        <li><a href="./privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="./terms-condition.php">Terms & Conditions</a></li>
                        <li><a href="./sitemap.xml">Sitemap</a></li>
                    </ul>
                </div>
                <div class="footer_div">
                    <p class="footer_div_header">Our Quick Contacts</p>
                    <div class="quick_contact_form flex">
                        <a href="https://www.instagram.com/lesssgotrippy/?igsh=djFxMWtvZ3Rnc2Zl" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/+917009479881" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </footer>


            <!-- !SWIPER JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
            <!-- !SMTP LINK-->
            <script src="https://smtpjs.com/v3/smtp.js"></script>
            <!-- !GSAP -->
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script> -->
            <!-- !LOCAL JS -->
            <script src="./scripts/packge.js?v=<?=$version?>"></script>
            </body>


            </html>