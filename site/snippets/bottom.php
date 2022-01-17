  <?= js('assets/js/marquee.js') ?>

  <div class="container">
      <div class="marquee bottom">
        <span><?= $site->find('home')->marqueeBottom() ?></span> <!-- marquee在其他页面显示不出来应该是这个kirby的路径不对，你看看-->
      </div>

  </div>
</div>

    <!-- JS marquee -->
    <?= js('assets/js/horizontal-panel.js') ?>
    <script type="text/javascript">
      $(window).load( function() {
        $('#panel').hpanel({
          duration: 80000
        });
      });
    </script>

<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });


      var swiper = new Swiper(".myHomeSwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });


    </script>

</body></html>
