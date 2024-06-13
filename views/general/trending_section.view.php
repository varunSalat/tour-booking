<?php $data =fetch_data() ?>
<!-- ! TRAINDING PACKEGE SECTION -->
<section id="trainding_packege" class="section">
    <div class="section_header">
        <p>What's Trending</p>
    </div>
    <div class="trainding_card_container flex">
        <?php foreach($data as $trip):?>
        <?php foreach($trip->categories as $category):?>
        <?php if($category=="trending"):?>
        <div class="trending_card">
            <div class="trending_img">
                <img src="<?=$trip->imgs[0]?>" alt="<?=$trip->Name?>">
            </div>
            <div class="flex"
                style="justify-content: space-between; flex-direction:column; align-items: flex-start; height:130px;">
                <div class="trending_card_name">
                    <h4><?=$trip->Name?></h4>
                </div>
                <div class="trending_dis flex" style="justify-content: space-between; width:100%;">
                    <div class="trending_inner_dis">
                        <p class="trending_price_container">Starting with: ₹<span
                                class="trending_price"><?=$trip->Starting_Price?></span> </p>
                        <p class="treding_duration_container flex"><i class="fa-regular fa-clock"></i> <span
                                class="trending_duration"><?=$trip->days?>D/<?=$trip->days-1?>N</span></p>
                    </div>
                    <div class="trending_inner_dis">
                        <a href="./detail.php?trip=<?=str_replace(' ', '_', $trip->Name)?>"
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