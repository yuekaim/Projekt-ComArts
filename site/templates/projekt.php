<?= css('assets/css/styles.css') ?>
<?= css('assets/css/projekt.css') ?>


<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper">
  <?php snippet('menu') ?>
  <div class="body-nomenu">
    <?php if($image = $page->cover()->toFile()): ?>
      <img class="preview-img" src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    <?= $page->content()->toBlocks() ?>
  </div>

</div>

<?php snippet('bottom') ?>
