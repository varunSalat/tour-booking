<script src="./scripts/contact-us.js"></script>

<!-- !CONTACT US -->
<div id="contact_us" class="section">
    <div class="section_header">
        <p>Contact Us</p>
    </div>

    <div class="contact_us_container flex">
        <form id="form" method="POST" onsubmit="validation(event)">
            <div class="input_container">
                <input type="text" name="name" id="general_form_name" placeholder="Your Name*" required>
                <p class="generalFromError">This is an error</p>
            </div>
            <div class="input_container">
                <input type="email" name="email" id="generalFormEmail" placeholder="Email Address" required>
                <p class="generalFromError">This is an error</p>
            </div>
            <div class="input_container">
                <input type="text" name="phone" id="generalFormPhone" placeholder="Phone Number*" required>
                <p class="generalFromError">This is an error</p>
            </div>
            <div class="input_container">
                <textarea name="enquiry" id="generalFormtext" placeholder="Your Enquiry*" cols="30" rows="10"
                    required></textarea>
                <p class="generalFromError">This is an error</p>
            </div>
            <div class="cf-turnstile" data-sitekey="0x4AAAAAAAeu2ys9UmdVa9Id"></div>
            <button type="submit" id="form_submit_btn" class="flex btn">
                Send Request<i class="fa-solid fa-angles-right"></i>
            </button>
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