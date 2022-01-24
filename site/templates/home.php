<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>

  <div class="body-nomenu">

    <div class="headline">
      <!-- <h1><span>HEADLINE</span></h1> -->
      <div class="swiper myHomeSwiper">
        <div class="swiper-wrapper" style="margin: 0 5rem;">

            <?php $headlines = $page->children()->published() ?>
            <?php foreach ($headlines as $post): ?>
              <?php if($post->intendedTemplate() == "headline"): ?>

              <div class="swiper-slide headlinewrapper">

              <?php if($post->link()->isNotEmpty()): ?>
                <a href="<?= $post->link()->url() ?>" target="_blank">
              <?php endif ?>
                <div class="insidewrapper">


                  <div class="headlineimg">
                    <?php if($image = $post->thumbnail()->toFile()): ?>
                      <img class="preview-img" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                      <div class="background-img">
                        <img class="" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                      </div>
                    <?php endif ?>
                  </div>
                  <div class="headline-info">
                    <h3><span><?= $post->headline()->text() ?></span></h3>
                    <p class="metainfo"><span><?= $post->metaInfo()->text() ?></span></p>
                    <div class="time">
                      <p><span><?= $post->date()->toDate("d.m.Y") ?></span></p>
                    </div>
                  </div>

                </div>

              <?php if($post->link()->isNotEmpty()): ?>

                </a>
              <?php endif ?>

              </div>


            <?php endif ?>
            <?php endforeach ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>


      </div>
    </div>


    <div class="desktop home-info hflex normal">
      <div class="short-about">
        <img class="close close1" src="assets/img/shrink.svg">
        <div class="content">
          <h1><span>PROJEKT COMARTS</span></h1>
          <span><?= $page->text()->kirbytext() ?></span>
          <!-- url-->
          <button type="button"><a href="https://comarts.suborder.center/wohnzimmer/was-bedeutet-community-arts">WEITER LESEN</a></button>
        </div>
      </div>
        <div class="news">
          <img class="close close2" src="assets/img/shrink.svg">

          <div class="content">
            <h1><span>Termine</span></h1>

              <?php $headlines = $page->children()->published() ?>
              <?php foreach ($headlines as $post): ?>
                <?php if($post->intendedTemplate() == "news"): ?>
                <div class="newswrapper">
                  <div class="newsimg">
                    <?php if($image = $post->thumbnail()->toFile()): ?>
                      <img class="preview-img" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                    <?php endif ?>
                  </div>
                  <h3><span><?= $post->headline()->text() ?></span></h3>
                  <p class="metainfo"><span><?= $post->metaInfo()->text() ?><span></p>
                  <div class="time">
                    <p><span>
                      <?= $post->date()->toDate("d.m.Y") ?>
                      <?php if ($post->enddate()): ?>
                        - <?= $post->enddate()->toDate("d.m.Y") ?>
                      <?php endif ?>
                    </span></p>
                  </div>
                </div>
                <?php endif ?>
              <?php endforeach ?>
            </div>
        </div>
    </div>

<!--phone to be styled-->


      <div class="phone short-about">
        <img class="close close1" src="assets/img/shrink.svg">
        <div class="content">
          <h1><span>PROJEKT COMARTS</span></h1>
          <p><span><?= $page->text() ?></span></p>
          <!-- url-->
          <button type="button"><a href="https://comarts.suborder.center/wohnzimmer/was-bedeutet-community-arts">WEITER LESEN</a></button>
        </div>
      </div>

      <div class="phone news">
        <img class="close close2" src="assets/img/shrink.svg">

        <div class="content">
          <h1><span>Termine</span></h1>

            <?php $headlines = $page->children()->published() ?>
            <?php foreach ($headlines as $post): ?>
              <?php if($post->intendedTemplate() == "news"): ?>
              <div class="newswrapper">
                <div class="newsimg">
                  <?php if($image = $post->thumbnail()->toFile()): ?>
                    <img class="preview-img" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                  <?php endif ?>
                </div>
                <h3><span><?= $post->headline()->text() ?></span></h3>
                <p class="metainfo"><span><?= $post->metaInfo()->text() ?><span></p>
                <div class="time">
                  <p><span>
                    <?= $post->date()->toDate("d.m.Y") ?>
                    <?php if ($post->enddate()): ?>
                      - <?= $post->enddate()->toDate("d.m.Y") ?>
                    <?php endif ?>
                  </span></p>
                </div>
              </div>
              <?php endif ?>
            <?php endforeach ?>
          </div>
      </div>

  </div>
  </div>



<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
