<h2>Populiarus skelbimai</h2>
<div class="pop-skelbimas-wrap">
    <?php foreach ($this->data['populars'] as $popAd): ?>
        <div class="box">
            <img width="100"src="<?= $popAd->getImage(); ?>">
            <?= $popAd->getTitle() ?>"
        </div>
    <?php endforeach; ?>
</div>
<h2>Naujausi skelbimai</h2>
<div class="pop-skelbimai-wrap">
    <?php foreach ($this->data['latest'] as $popAd): ?>
        <img width="100"src="<?= $popAd->getImage(); ?>">
        <div class="box">
            <?=$popAd->getTitle() ?>
        </div>
    <?php endforeach; ?>
</div>
