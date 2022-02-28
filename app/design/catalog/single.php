<?php $ad = $this->data['ad']; ?>
<div class="wrapper">
    <div class="post-content">
    <h1><?= $ad->getTitle();?></h1>
        <div class="image-wrapper">
            <img src="<?= $ad->getImage()?>">
        </div>
    <div id="price" class="price">
        <?= $ad->getPrice(); ?>
    </div>
    <div class="details">
        <p>
            <?= $ad->getDescription();?>
        </p>
    </div>
     <div class="gearbox">
         <p>
             <?= $ad->getGearbox();?>
         </p>
     </div>
         <div class="fuel">
          <p>
             <?= $ad->getFuel();?>
          </p>
     </div>
     <div class="kilometers">
         <p>
             <?= $ad->getKilometers();?>
         </p>
     </div>
</div>
</div>
