<?= css('assets/css/styles.css') ?>
<?= css('assets/css/projekt.css') ?>
<?= css('assets/css/menu.css') ?>
<?= css('assets/css/podcast.css') ?>



<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>
  <div class="body-nomenu hflex">

    <?php if($image = $page->cover()->toFile()): ?>
      <div class="projekt-image box">
        <img src="<?= $image->url() ?>" alt="">
      </div>
    <?php endif ?>
    <div class="projekt-text box">
      <div class="info-inside">
        <?= $page->maincontent()->kt() ?>
      </div>
    </div>
    <!-- <div class="expand">
      +
    </div> -->
  </div>
  <?php foreach($page->audio() as $audio): ?>
    <audio controls>
      <source src="<?= $audio->url() ?>" type="<?= $audio->mime() ?>">
    </audio>
  <?php endforeach ?>

</div>

<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
