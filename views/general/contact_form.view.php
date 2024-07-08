<!-- !CONTACT US -->
<div id="contact_us" class="section">
    <div class="section_header">
        <p>Contact Us</p>
    </div>

    <div class="contact_us_container flex">
        <form onsubmit="return onClick(e)" id="form">
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
            <button class="g-recaptcha flex btn" data-sitekey="6LfgKAsqAAAAAFUgWZDvF_UvyCDlsP6-BYhREs9q"
                data-callback='onSubmit' data-action='submit' id="form_submit_btn" type="submit">Send Request<i
                    class="fa-solid fa-angles-right"></i>
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

<script>
function onClick(e) {
    e.preventDefault();
    console.log("runned");
    grecaptcha.enterprise.ready(async () => {
        const token = await grecaptcha.enterprise.execute('6Lca3QoqAAAAAO9RWJV7BkG5u3AQbK9ayCcv5eeN', {
            action: 'LOGIN'
        });
    });
}
</script>

<script src="./scripts/contact-us.js"></script>