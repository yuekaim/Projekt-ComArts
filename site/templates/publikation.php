<?= css('assets/css/styles.css') ?>
<?= css('assets/css/projekt.css') ?>
<?= css('assets/css/menu.css') ?>



<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>
  <div class="body-nomenu flex">
    <div class="projekt-text box" id="mask">
      <?php if($image = $page->cover()->toFile()): ?>
        <img src="<?= $image->url() ?>" alt="" class="bg">
      <?php endif ?>
      <h1><?= $page->headline()->kirbytext() ?></h1>
      <div class="">
        <?= $page->tags() ?>
        <?php if($pdf = $page->pdf()->toFile()): ?>
            <a href="<?= $pdf->url() ?>" target="_blank">
              download pdf
            </a>
            <!-- <img class="close" src="../assets/img/close.svg"> -->
        <?php endif ?>
        <?php if($page->pdflink()->isNotEmpty()): ?>

            <a href="<?= $page->pdflink() ?>" target="_blank">
              download pdf
            </a>
            <!-- <img class="close" src="../assets/img/close.svg"> -->
        <?php endif ?>
        <?= $page->maincontent()->kirbytext() ?>
      </div>
    </div>
  </div>

</div>

<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
