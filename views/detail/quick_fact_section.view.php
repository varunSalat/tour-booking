<!-- !QUICK FACTS CONTAINER -->
<?php $key =is_set_key(); ?>


<section class="section">
    <div class="section_header">
        <p>About Tour</p>
    </div>

    <div class="tour_dis">
        <?php foreach($key->about_Tour as $para):?>
        <p class="tour_text"><?=$para?></p>
        <?php endforeach;?>
        <?php  if($key->quickFacts[0]!==""): ?>
        <div class="quick_fact_container">
            <h4>Quick Facts About Trek:</h4>
            <ul class="quick_fact_container">
                <?php foreach($key->quickFacts as $term):?>
                <li><?=$term?></li>
                <?php endforeach;?>
            </ul>
        </div>
        <?php endif;?>
    </div>