<!-- !CONTACT US -->
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
                <a href="https://goo.gl/maps/R9GEopZdDgiwMsua6" target="_blank">B-59, Bhumipark, Vavol, Gandhinagar,
                    Gujarat-382016</a>
            </div>
        </div>
    </div>
</div>