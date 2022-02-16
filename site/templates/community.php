
<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>
  <div class="keywords desktop">
    <?php foreach ($page->tags()->split() as $keyword): ?>
      <span class="tag"><?= $keyword ?></span>
    <?php endforeach ?>
    <?php foreach ($page->tags2()->split() as $keyword): ?>
      <span class="tag2"><?= $keyword ?></span>
    <?php endforeach ?>
    <?php foreach ($page->tags3()->split() as $keyword): ?>
      <span class="tag3"><?= $keyword ?></span>
    <?php endforeach ?>
    <?php foreach ($page->tags4()->split() as $keyword): ?>
      <span class="tag4"><?= $keyword ?></span>
    <?php endforeach ?>
    <?php foreach ($page->tags5()->split() as $keyword): ?>
      <span class="tag5"><?= $keyword ?></span>
    <?php endforeach ?>
    <?php foreach ($page->tags6()->split() as $keyword): ?>
      <span class="tag6"><?= $keyword ?></span>
    <?php endforeach ?>
    <?php foreach ($page->tags7()->split() as $keyword): ?>
      <span class="tag7"><?= $keyword ?></span>
    <?php endforeach ?>

  </div>

  <div class="body-nomenu infos hflex">
    
    <div class="about box">
        <p><?= $page->about()->kirbytext() ?></p>
    </div>
    <div class="kontakt">
          <div class="block-1 box">
            <div class="content">
            <?php if ($page->bt1()->isNotEmpty()): ?>
              <h1 lang="de"><?= $page->bt1() ?></h1>
            <?php endif ?>
            <?php if ($page->bc1()->isNotEmpty()): ?>
              <?= $page->bc1()->kirbytext() ?>
            <?php endif ?>
            </div>
          </div>

          <div class="block-2 box">
            <div class="content">
            <?php if ($page->bt2()->isNotEmpty()): ?>
              <h1 lang="de"><?= $page->bt2() ?></h1>
            <?php endif ?>
            <?php if ($page->bc2()->isNotEmpty()): ?>
              <?= $page->bc2()->kirbytext() ?>
            <?php endif ?>
            </div>
          </div>

          <div class="block-3 box">
            <div class="content">
            <?php if ($page->bt3()->isNotEmpty()): ?>
              <h1 lang="de"><?= $page->bt3() ?></h3>
            <?php endif ?>
            <?php if ($page->bc3()->isNotEmpty()): ?>
              <?= $page->bc3()->kirbytext() ?>
            <?php endif ?>
            </div>
          </div>
          <div class="block-4 box">
            <div class="content">
            <?php if ($page->bt4()->isNotEmpty()): ?>
              <h1 lang="de"><?= $page->bt4() ?></h3>
            <?php endif ?>
            <?php if ($page->bc4()->isNotEmpty()): ?>
              <?= $page->bc4()->kirbytext() ?>
            <?php endif ?>
            </div>
          </div>
        </div>

            <!-- <p><?= $page->teamKontakt() ?></p> -->

        </div>
    </div>


<?= js('assets/js/hashtags.js') ?>

<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
