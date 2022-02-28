<?php $pages = ceil($this->data['count'] / 2); ?>
<div class="wrapper">
    <div class="catalog">
    <?php foreach ($this->data['ads'] as $ad): ?>
        <div class="box">
            <div class="padding">
                <!--            <a href="--><?php //echo BASE_URL . 'catalog/show/' . $ad->getId() ?><!--">-->
            <a href="<?php echo $this->url('catalog/show/' . $ad->getSlug()) ?>">
                <img src="<?php echo $ad->getImage() ?>">
                <div class="title">
                    <?php echo $ad->getTitle() . '('.$ad->getYear(). ')'?>
                </div>
                <div class="price">
                    <span><?php echo $ad->getPrice().'€' ?></span>
                </div>
                <div class="vincode">
                    <?php echo $ad->getVin() ?>
                </div>
                <div class="gearbox">
                    <?php echo $ad->getGearbox() ?>
                </div>
                <div class="fuel">
                    <?php echo $ad->getFuel() ?>
                </div>
                <div class="kilometers">
                    <?php echo $ad->getKilometers() ?>
                </div>
            </a>
        </div>
        </div>
    <?php endforeach; ?>
    </div>
    <ul>
        <?php for($i = 1; $i <=  $pages; $i++): ?>
            <li>
                <a href="<?= $this->url('catalog').'?p='.$i; ?>">
                    <?= $i; ?>
                </a>
            </li>
           <?php endfor; ?>
       </div>
</div>
</div>