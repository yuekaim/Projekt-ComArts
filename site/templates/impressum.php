<?php snippet('header') ?>
<?php snippet('top') ?>


<div class="body-wrapper">
  <?php snippet('menu') ?>

  <div class="body-nomenu">
    <div class="impressum">
      <div class="content">
        <h1><?= $page->title() ?></h1>
        <p><?= $page->text() ?></p>
      </div>
    </div>


    </div>

  </div>


<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
