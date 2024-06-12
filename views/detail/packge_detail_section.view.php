<!-- ! PACKGE NAVBAR -->
<?php $key =is_set_key(); ?>
<div class="about_tour_detail_section">
    <nav id="about_nav">
        <ul class="about_nav_container flex">
            <?php if($key->TourMap[0]!==""):?>
            <li class="about_nav_link"><a href="#tour_map">Tour Map</a></li>
            <?php endif;?>
            <li class="about_nav_link"><a href="#itenery">Itinerary</a></li>
            <li class="about_nav_link"><a href="#packges">Packages</a></li>
            <li class="about_nav_link"><a href="#photos">Photos</a></li>
            <li class="about_nav_link"><a href="#policy">Policy</a></li>
        </ul>
    </nav>
    <?php if($key->TourMap[0]!==""):?>
    <div class="about_tour_main_container" id="tour_map">
        <div class="about_tour_header">
            <p>Tour Map</p>
        </div>
        <div class="tour_map_container">
            <?php for($i=0;$i<count($key->TourMap);$i++):?>
            <div class="tour_place flex">
                <p><?=$i+1?> <?= $key->TourMap[$i] ?></p>
            </div>
            <?php endfor;?>
        </div>
    </div>
    <?php endif;?>

    <!-- !ITENERY -->


    <div class="about_tour_main_container" id="itenery">
        <div class="about_tour_header">
            <p>Itinerary</p>
        </div>

        <?php for($i=0;$i<count($key->itenery);$i++):?>
        <div class="itenery_container">
            <div class="itenery_card">
                <p class="itenery_date">Day-<span class="itenery_day_num"><?=$i+1?> : </span></p>
                <ul class="itenery_list_container">
                    <?php foreach($key->itenery[$i] as $term):?>
                    <li class="itenery_list"><?=$term?></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <?php endfor;?>
    </div>

    <!-- !PACKGE CARDS -->

    <div class="about_tour_main_container" id="packges">
        <div class="about_tour_header">
            <p>Packages</p>
        </div>
        <div class="packges_main_container">
            <?php foreach($key->packges as $packge):?>
            <div class="tour_packge_card">
                <div class="packge_upper_container flex">
                    <p class="packge_name"><?=$packge[0]?></p>
                    <div class="packge_price_container flex">
                        <p>Price : <span class="discounted_price"><?=$packge[1]?></span></p>
                    </div>
                </div>
                <div class="packge_down_container flex">
                    <div class="packge_date_main_container">
                        <div class="packge_date_meal_container flex">
                            <p> Days: <?= $packge[3]?></p>
                        </div>
                        <div class="packge_date_meal_container packge_meal_container  flex">
                            <p> Meals: <span class="meal_container"> <?= $packge[2]?></span></p>
                        </div>
                    </div>
                    <button class="packge_book_btn btn">Book Packge</button>
                </div>
            </div>
            <?php endforeach;?>

        </div>

        <!-- !PHOTO GALLERY -->

        <div class="about_tour_main_container" id="photos">
            <div class="about_tour_header">
                <p>Photo Gallery</p>
            </div>
            <div class="photo_container flex">
                <?php foreach($key->imgs as $img):?>
                <div class="photo_gallery_img_container">
                    <img src="<?=$img?>" loading="lazy" alt="<?=$key->Name?>">
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="about_tour_main_container" id="policy">
            <div class="about_tour_header">
                <p>Cancelation Policy</p>
            </div>
            <div class="policy_container">
                <p>Before 25 days of departure - 50% Cancellation charges</p>
                <p>Between 1 to 25 days of departure - 75% Cancellation charges</p>
                <p>In last 24 hours of departure - 100% Cancellation charges</p>
            </div>
        </div>
    </div>
    </section>


    <!-- !PACKGE FORM CONTAINER -->
    <div class="packge_form_container">
        <form action="javascript: packgeFormValidation()" id="packge_form">
            <div class="packge_form_header_container flex">
                <div class="packge_form_name">
                    <p class="packge_form_header"><?=$key->Name;?></p>
                    <p class="packge_type">Gold Packge</p>
                </div>
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="input_container">
                <label for="packge_form_name">Full Name*</label>
                <input type="text" id="packge_form_name" required>
                <p class="packgeFromError"></p>
            </div>
            <div class="input_container">
                <label for="packge_form_email">Email Address*</label>
                <input type="email" id="packge_form_email" required>
                <p class="packgeFromError"></p>
            </div>
            <div class="input_container">
                <label for="packge_form_phone_num">Phone Number*</label>
                <input type="text" id="packge_form_phone_num" required>
                <p class="packgeFromError"></p>
            </div>
            <div class="input_container">
                <label for="packge_form_person_num">Number Of Persons*</label>
                <input type="number" id="packge_form_person_num" required>
                <p class="packgeFromError"></p>
            </div>
            <div class="input_container">
                <label for="packge_form_name">Trip Date*</label>
                <input type="date" id="packge_form_date" placeholder="Your Trip Date*" required>
                <p class="packgeFromError"></p>
            </div>
            <!-- <div class="input_container">
                <label for="packge_form_name">Packge Name</label>
                <p class="packge_type">Gold Packge</p>
            </div> -->
            <div class="input_container">
                <textarea name="text" id="packgeFormtext" placeholder="Special Request" cols="30" rows="10"></textarea>
                <p class="generalFromError">This is an error</p>
            </div>
            <button id="packge_form_submit_btn" class="flex btn" type="submit">Send<i
                    class="fa-solid fa-angles-right"></i></button>
        </form>
    </div>