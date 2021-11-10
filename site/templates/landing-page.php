<?php snippet('header') ?>
<?php snippet('top') ?>
<?php snippet('menu') ?>

<?= js('assets/js/paper-full.js') ?>
<!-- <?= js('assets/js/home.js') ?> -->
<script type="text/paperscript" src="assets/js/home.js" canvas="canvas"></script>
<div class="paperjs">
  <img id="gradient" class="visuallyhidden" src="assets/img/bg.jpg" width="320" height="491">
  <canvas id="canvas" resize></canvas>
</div>
<div class="short-about">
  <div class="content">
    <h1>PROJRKT COMARTS</h1>
    <p><?= $page->text() ?></p>
    <button type="button">WEITER LESEN</button>
  </div>
</div>
<div class="headline">
  <h1>HEADLINE</h1>
</div>
<div class="news">
  <h1>NEWS</h1>
</div>

<?php snippet('bottom') ?>
