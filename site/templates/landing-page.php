<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>

  <div class="body-nomenu">

    <?= js('assets/js/paper-full.js') ?>
    <!-- <?= js('assets/js/home.js') ?> -->
    <script type="text/paperscript" src="assets/js/home.js" canvas="canvas"></script>
    <div class="paperjs">
      <img id="gradient" class="visuallyhidden" src="assets/img/bg.jpg" width="320" height="491">
      <canvas id="canvas" resize></canvas>
    </div>



  </div>

</div>

<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
