  <?= js('assets/js/marquee.js') ?>

  <div class="container">
      <div class="marquee bottom">
        <span><?= $site->find('landing-page')->marqueeBottom() ?></span> <!-- marquee在其他页面显示不出来应该是这个kirby的路径不对，你看看-->
      </div>
  </div>
</div>

<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

</body></html>
