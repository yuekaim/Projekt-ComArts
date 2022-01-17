<?php snippet('header') ?>
<?php snippet('top') ?>


<div class="body-wrapper">
  <?php snippet('menu') ?>

  <div class="body-nomenu hflex">
    <div class="impressum box">
      <div class="content">
        <h1><?= $page->title() ?></h1>
        <p><?= $page->text() ?></p>
      </div>
    </div>
    <div class="datenschutz box">
      <div class="content">
        <h1>Datenschutzerklärung></h1>
        <p><?= $page->text2() ?></p>
      </div>
    </div>

    </div>

  </div>


<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
