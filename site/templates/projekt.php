<?= css('assets/css/styles.css') ?>
<?= css('assets/css/projekt.css') ?>
<?= css('assets/css/menu.css') ?>


<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper">
  <?php snippet('menu') ?>
  <div class="body-nomenu hflex">
    <?php if($image = $page->cover()->toFile()): ?>
      <div class="projekt-image box">
        <img src="<?= $image->url() ?>" alt="">
        <img class="close" src="../assets/img/close.svg">
      </div>
    <?php endif ?>
    <div class="projekt-text box" id="mask">
      <?php if($image = $page->cover()->toFile()): ?>
        <img src="<?= $image->url() ?>" alt="">
      <?php endif ?>
      <h1><?= $page->headline()->kirbytext() ?></h1>
      <div class="">
        <?= $page->tags() ?>
        <?= $page->maincontent()->kirbytext() ?>
      </div>
    </div>
  </div>

</div>

<?php snippet('bottom') ?>
