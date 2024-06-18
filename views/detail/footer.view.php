            <?php require("./function/config.php");?>
            <!-- !CONTACT US SECTION -->
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
                            <a href="https://wa.me/+919624860420" target="_blank">+91 962 486 0420</a>
                        </div>
                        <div class="quick_contact_card flex">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:we.trailblenders@gmail.com" class="flex mail-text">Send Email <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="quick_contact_card flex">
                            <i class="fa-solid fa-location-dot"></i>
                            <a href="https://goo.gl/maps/R9GEopZdDgiwMsua6" target="_blank">B-59, Bhumipark, Vavol,
                                Gandhinagar, Gujarat-382016</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="map_section">
                <iframe title="map-location"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7332.862353871323!2d72.61476122681357!3d23.227391748647506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2bd93957a3bb%3A0x47f3b3c4fdeaa80c!2sBhoomi%20Park%20Society!5e0!3m2!1sen!2sin!4v1675964171402!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- !FOOTER -->
            <footer id="footer" class="section flex">
                <div class="footer_div">
                    <div class="logo_container">
                        <a href="../" class="footer_logo"><img src="./img/text_logo.webp" alt="logo_img"></a>
                    </div>
                    <p class="footer_div_dis">LessGoTrippy is a travel community that has been engaging in trekking
                        and travelling for a long time. We are a group of experienced professionals who are passionate
                        about helping others to explore the world. </p>
                </div>
                <div class="footer_div">
                    <p class="footer_div_header">Useful Links</p>
                    <ul>
                        <li><a href=".">Home</a></li>
                        <li><a href="./tour.php">Tours</a></li>
                        <li><a href="./track.php">Treks</a></li>
                        <li><a href="#contact_us">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer_div">
                    <p class="footer_div_header">Our Quick Contacts</p>
                    <div class="quick_contact_form flex">
                        <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="https://www.linkedin.com/in/varun-salat-709a0a19a/" target="_blank"
                        class="copyright">Designed Created by <span class="underline">Varun Salat <i
                                class="fa-brands fa-linkedin-in"></i></span></a>
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