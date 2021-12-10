
<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper">
  <?php snippet('menu') ?>

  <div class="body-nomenu">

    <div class="about">
      <div class="content">
        <p><span><?= $page->about() ?></span></p>
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
