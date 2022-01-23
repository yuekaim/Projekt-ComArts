<?= css('assets/css/styles.css') ?>
<?= css('assets/css/projekt.css') ?>
<?= css('assets/css/menu.css') ?>


<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>
  <div class="body-nomenu projekt hflex">
    <?php if($page->image()): ?>
      <div class="swiper mySwiper projekt-image box">
        <div class="swiper-wrapper">
          
          <?php $images = $page->uploadedimages()->toFiles();
            foreach($images as $image):
          ?>
            <div class="swiper-slide">
              <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
            </div>
          <?php endforeach ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    <?php endif ?>
    <div class="projekt-text box" id="mask">
      <?php if($image = $page->cover()->toFile()): ?>
        <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" class="bg">
      <?php endif ?>
      <h1><?= $page->headline() ?></h1>
      <div class="main">
        <div class="keywords">
          <?php foreach ($page->tags()->split() as $tag): ?>
          <span style="background-color: #bbb;
    border-radius: 2rem;font-size:0.7rem;border: 0px"><?= $tag ?></span>
          <?php endforeach ?>
        </div>
        <br>
        <span class="personen"><b><?= $page->personen() ?></b></span>
        <?= $page->maincontent()->kirbytext() ?>
      </div>
    </div>
  </div>

</div>

<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
