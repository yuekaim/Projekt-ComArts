
<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>
  <div class="keywords">
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

            <h1>About</h1>
            <p><?= $page->about()->kirbytext() ?></p>

        </div>
        <div class="kontakt">

            <!-- <h1>Kontakt</h1> -->
          <div class="block-1 box">
            <div class="content">
            <?php if ($page->bt1()->isNotEmpty()): ?>
              <h1 lang="de"><?= $page->bt1() ?></h3>
            <?php endif ?>
            <?php if ($page->bc1()->isNotEmpty()): ?>
              <?= $page->bc1()->kirbytext() ?>
            <?php endif ?>
          </div>
          </div>
          <div class="wissenschaftlich box">
            <div class="content">
            <?php if ($page->wissenschaftlich()->isNotEmpty()): ?>
            <h1>Wissenschaftliche Bearbeitung und Koordination</h3>
            <p><?= $page->wissenschaftlich()->kirbytext() ?></p>
            <?php endif ?>
            </div>
          </div>
          <div class="fands box">
            <div class="content">
            <?php if ($page->fands()->isNotEmpty()): ?>
            <h1>Freie & Studierendenmitarbeiter:innen</h3>
            <p><?= $page->fands() ?></p>
            <?php endif ?>
            </div>
          </div>
          <div class="netzwerk box">
            <div class="content">
            <?php if ($page->netzwerk()->isNotEmpty()): ?>
            <h1>Netzwerk</h3>
            <p><?= $page->netzwerk() ?></p>
            <?php endif ?>
            </div>
          </div>

            <!-- <p><?= $page->teamKontakt() ?></p> -->

        </div>
    </div>


</div>

<?= js('assets/js/hashtags.js') ?>

<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
