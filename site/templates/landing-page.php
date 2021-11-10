<?php snippet('header') ?>
<?php snippet('top') ?>
<?php snippet('menu') ?>

<div class="body-wrapper">

  <?= js('assets/js/paper-full.js') ?>
  <!-- <?= js('assets/js/home.js') ?> -->
  <script type="text/paperscript" src="assets/js/home.js" canvas="canvas"></script>
  <div class="paperjs">
    <img id="gradient" class="visuallyhidden" src="assets/img/bg.jpg" width="320" height="491">
    <canvas id="canvas" resize></canvas>
  </div>
  <div class="short-about">
    <div class="content">
      <h1><span>PROJRKT COMARTS</span></h1>
      <p><span><?= $page->text() ?></span></p>
      <button type="button">WEITER LESEN</button>
    </div>
  </div>
  <div class="headline">
    <h1><span>HEADLINE</span></h1>
  </div>
  <div class="news">
    <h1><span>NEWS</span></h1>
  </div>

</div>

<?php snippet('bottom') ?>
