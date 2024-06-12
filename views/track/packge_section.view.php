<?php $data =fetch_data() ?>
<!-- !PACKEGE SECTION -->
<section id="packges_section" class="section">
    <div class="section_header">
        <h3>Trekking & Hiking Packages</h3>
    </div>
    <div class="packege_container">
        <?php foreach($data as $trip):?>
        <?php foreach($trip->categories as $category):?>
        <?php if($category=="trek"):?>
        <div class="tour_packege_card">
            <div class="tour_packege_header flex">
                <p class="package_name"><?=$trip->Name;?></p>
                <p class="package_duration"><i class="fa-regular fa-clock"></i><span
                        class="package_duration_day"><?=$trip->days?></span>D/<span
                        class="package_duration_night"><?=$trip->days-1?></span>N</p>
            </div>
            <div class="package_card_img_container">
                <img src="<?=$trip->imgs[0]?>" alt="<?=$trip->Name?>" loading="lazy">
            </div>
            <div class="tour_packege_btn_container flex">
                <div class="type_container flex"><img src="./img/logo-black.png" alt="logo-black"><span
                        class="tour_type"><?= $trip->tour_type?></span></div>
                <a href="./detail.php?trip=<?=str_replace(' ', '_', $trip->Name)?>" class="trending_btn btn">Explore</a>
            </div>
        </div>
        <?php endif;?>
        <?php endforeach;?>
        <?php endforeach;?>
    </div>
</section>