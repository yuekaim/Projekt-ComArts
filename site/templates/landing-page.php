<?php snippet('header') ?>
<?php snippet('top') ?>

<?= js('assets/js/paper-full.js') ?>
<!-- <?= js('assets/js/home.js') ?> -->
<script type="text/paperscript" src="assets/js/home.js" canvas="canvas"></script>
<div class="paperjs">
  <img id="gradient" class="visuallyhidden" src="assets/img/bg.jpg" width="320" height="491">
  <canvas id="canvas" resize></canvas>
</div>
<?php snippet('menu') ?>
<?php snippet('bottom') ?>
