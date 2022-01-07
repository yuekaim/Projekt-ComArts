<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>

  <div class="body-nomenu">

    <div class="headline">
      <h1><span>HEADLINE</span></h1>
    </div>


    <div class="desktop home-info hflex normal">
      <div class="short-about">
        <img class="close close1" src="assets/img/shrink.svg">
        <div class="content">
          <h1><span>PROJEKT COMARTS</span></h1>
          <p><span><?= $page->text() ?></span></p>
          <button type="button">WEITER LESEN</button>
        </div>
      </div>
        <div class="news">
          <h1><span>NEWS</span></h1>
          <img class="close close2" src="assets/img/shrink.svg">
        </div>
    </div>

    <div class="phone short-about">
        <img class="close close1" src="assets/img/shrink.svg">
        <div class="content">
          <h1><span>PROJEKT COMARTS</span></h1>
          <p><span><?= $page->text() ?></span></p>
          <button type="button">WEITER LESEN</button>
        </div>
    </div>
    <div class="phone news">
      <h1><span>NEWS</span></h1>
      <img class="close close2" src="assets/img/shrink.svg">
    </div>
  </div>
  </div>



<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
