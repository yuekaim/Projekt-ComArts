
<div class="body-flex">
  <?= js('assets/js/marquee.js') ?>


  <div class="container">
    <div class="marquee top">
      <span><?= $site->find('home')->marqueeTop() ?></span> <!-- marquee在其他页面显示不出来应该是这个kirby的路径不对，你看看-->
    </div>
  </div>
