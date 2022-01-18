

  <div class="container">
    <div class='bottom marquee'><?= $site->find('home')->marqueeBottom()->text() ?></div>

  </div>
</div>

<!-- js marquee -->
  <?= js('assets/js/jquery.marquee.min.js') ?>
  <?= js('assets/js/jquery.pause.min.js') ?>

  <script type="text/javascript">

  $('.marquee').marquee({
  	speed: 50,
  	gap: 5,
  	delayBeforeStart: 0,
  	direction: 'left',
  	duplicated: true,
  	pauseOnHover: true
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
