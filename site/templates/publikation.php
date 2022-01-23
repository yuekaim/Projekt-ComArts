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
        <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" class="bg">
      <?php endif ?>
      <h1 style="font-size:1.7rem"><?= $page->headline() ?></h1>
      <div class="content">
        <h3 style="font-size:1rem"><?= $page->personen()?></h3>
        <span class="personen"><b><?= $page->subheading()?></b></span>
        <p style=" margin: 2rem 0rem;"><?= $page->maincontent()->kirbytext() ?></p>
        <p style=" margin: 2rem 0rem;"><?= $page->content2()->kirbytext() ?></p>
      </div>
      <div class="pdflink">
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
      </div>
    </div>
  </div>

</div>

<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
