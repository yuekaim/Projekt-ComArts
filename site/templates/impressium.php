<?php snippet('header') ?>
<?php snippet('top') ?>


<div class="body-wrapper">
  <?php snippet('menu') ?>

  <div class="body-nomenu">
    <div class="impressium">
      <h1><?= $page->title() ?></h1>
      <p><?= $page->text() ?></p>
    </div>
  </div>
</div>


<?php snippet('bottom') ?>
