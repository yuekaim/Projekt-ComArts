<?= css('assets/css/styles.css') ?>
<?= css('assets/css/projekt.css') ?>
<?= css('assets/css/menu.css') ?>
<?= css('assets/css/video.css') ?>



<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>
  <div class="body-nomenu video hflex">
    <?php if ($page->vimeoyoutube()->value() == "youtube") : ?>
      <?= youtube($page->link()->url()) ?>
    <?php else : ?>
      <?= vimeo($page->link()->url()) ?>
    <?php endif ?>
    <div class="projekt-text box">
      <div class="info-inside">
        <?= $page->maincontent()->kt() ?>
      </div>
    </div>
    <div class="expand box">
        <div class="">
          +
        </div>
    </div>
  </div>

</div>

<?= js('assets/js/video.js') ?>
<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
