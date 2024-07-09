<?php $data =fetch_data() ?>
<!-- !PACKEGE SECTION -->
<section id="packges_section" class="section">
    <div class="section_header">
        <h3>Routes Packages</h3>
    </div>
    <div class="packege_container">
        <?php foreach($data as $trip):?>
        <?php foreach($trip->categories as $category):?>
        <?php if($category=="trek"):?>
        <div class="trending_card">
            <div class="trending_img">
                <img loading="lazy" src="<?=$trip->imgs[0]?>" alt="<?=$trip->Name?>">
            </div>
            <div class="flex tc_des">
                <div class="trending_card_name">
                    <h4><?=$trip->Name?></h4>
                </div>
                <div class="trending_dis flex" style="justify-content: space-between; width:100%;">
                    <div class="trending_inner_dis">
                        <p class="trending_price_container">Starting with: ₹<span
                                class="trending_price"><?=$trip->Starting_Price?></span> </p>
                        <p class="treding_duration_container flex"><i class="fa-regular fa-clock"></i> <span
                                class="trending_duration"><?=$trip->hours?> hour</span> <span class="dot"></span> <span
                                class="trending_duration"><?=$trip->seats?> Seats</span></p>
                    </div>
                    <div class="trending_inner_dis">
                        <a href="./contact-us.php?trip=<?=str_replace(' ', '_', $trip->Name)?>"
                            class="trending_btn btn">Send
                            Enquiry</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
        <?php endforeach;?>
        <?php endforeach;?>
    </div>
</section>