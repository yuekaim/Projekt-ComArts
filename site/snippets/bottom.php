  <?= js('assets/js/marquee.js') ?>

  <div class="container">
      <div class="marquee bottom">
        <span><?= $site->find('landing-page')->marqueeBottom() ?></span> <!-- marquee在其他页面显示不出来应该是这个kirby的路径不对，你看看-->
      </div>
  </div>
</div>

</body></html>
