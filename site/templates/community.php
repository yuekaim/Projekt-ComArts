
<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper">
  <?php snippet('menu') ?>

  <div class="body-nomenu">

    <div class="short-about">
      <div class="content">
        <h1><span>PROJRKT COMARTS</span></h1>
        <p><span><?= $page->text() ?></span></p>
        <button type="button">WEITER LESEN</button>
      </div>
    </div>

    <div class="home-info hflex normal">
        <div class="headline">
          <h1><span>HEADLINE</span></h1>
          <img class="close" src="assets/img/shrink.svg">
        </div>
        <div class="news">
          <h1><span>NEWS</span></h1>
          <img class="close" src="assets/img/shrink.svg">
        </div>
    </div>

  </div>

</div>

<?php snippet('bottom') ?>
