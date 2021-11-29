<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper">
  <?php snippet('menu') ?>

  <div class="body-nomenu">
    <div class="community hflex">

      <div class="left">
        <p><?= $page->about() ?></p>
      </div>

      <div class="right">
        <p><?= $page->teamKontakt() ?></p>
        <p><?= $page->netzwerk() ?></p>
    </div>


    </div>

  </div>
<?php snippet('bottom') ?>
