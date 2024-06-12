<!-- !CUSTOME PACKGE FORM -->

<div class="custome_packge_form_main_container">
    <form action="javascript: custome_packge_validate()" id="custome_packge_form" method="post">
        <div class="custome_packge_form_header flex">
            <h4>Create your custome packge</h4>
            <i class="fa-solid fa-xmark" style="color: #cc1400;"></i>
        </div>
        <div class="custome_input_main_container">
            <p class="input_header">Tour Information:-</p>
            <div class="custom_input_inner_container flex">
                <div class="custome_input_container flex">
                    <label for="custom_from">From :</label>
                    <input type="text" name="custom_from" id="custom_from" placeholder="Starting Place">
                </div>
                <div class="custome_input_container flex">
                    <label for="custom_from">To :</label>
                    <input type="text" name="custom_from" id="custom_from" placeholder="Destination Place">
                </div>
            </div>
            <div class="custom_input_inner_container flex">
                <div class="custome_input_container flex">
                    <label for="custom_from">Number of Person :</label>
                    <input type="number" name="custom_from" id="custom_from" placeholder="Number of Person">
                </div>
                <div class="custome_input_container flex">
                    <label for="custom_from">Days :</label>
                    <input type="number" name="custom_from" id="custom_from" placeholder="Total Days">
                </div>
            </div>
            <p class="input_header">Personal Information:-</p>
            <div class="custom_input_inner_container flex">
                <div class="custome_input_container flex">
                    <label for="custom_from">First Name :</label>
                    <input type="text" name="custom_first_name" id="custom_first_name" placeholder="First Name">
                </div>
                <div class="custome_input_container flex">
                    <label for="custom_last_name">Last Name :</label>
                    <input type="text" name="custom_last_name" id="custom_last_name" placeholder="Last Name">
                </div>
            </div>
            <div class="custom_input_inner_container flex">
                <div class="custome_input_container flex">
                    <label for="custom_number">Phone Number :</label>
                    <input type="number" name="custom_number" id="custom_number" placeholder="Phone Number">
                </div>
                <div class="custome_input_container flex">
                    <label for="custom_email">Email Address :</label>
                    <input type="email" name="custom_email" id="custom_email" placeholder="Email Address">
                </div>
            </div>
        </div>

        <p class="input_header">Request:-</p>
        <div class="custom_input_inner_container flex">
            <div class="custome_input_container custom_input_inner_container_textarea  flex">
                <label for="custom_request">Special Request :</label>
                <textarea name="custom_request" id="custom_request" placeholder="Your Request" cols="30"
                    rows="10"></textarea>
            </div>
        </div>
        <button type="submit" id="custome_packge_btn" class="btn trending_btn">Send Message</button>
    </form>
</div>