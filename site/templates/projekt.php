<?= css('assets/css/styles.css') ?>
<?= css('assets/css/projekt.css') ?>


<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper">
  <?php snippet('menu') ?>
  <div class="body-nomenu hflex">
    <?php if($image = $page->cover()->toFile()): ?>
      <div class="projekt-image box">
        <img src="<?= $image->url() ?>" alt="">
      </div>
    <?php endif ?>
    <div class="projekt-text box">
      <img src="<?= $image->url() ?>" alt="">
      <h1><?= $page->headline()->kirbytext() ?></h1>
      <div class="">
        <?= $page->tags() ?>
        <?= $page->content()->toBlocks() ?>
      </div>
    </div>
  </div>

</div>

<?php snippet('bottom') ?>
