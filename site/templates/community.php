
<?php snippet('header') ?>
<?php snippet('top') ?>
<div class="body-wrapper vflex">
  <?php snippet('menu') ?>
  <?php snippet('keywords') ?>

  <div class="body-nomenu infos hflex">

        <div class="about box">

            <h1>About</h1>
            <p><?= $page->about() ?></p>

        </div>
        <div class="kontakt">

            <!-- <h1>Kontakt</h1> -->
          <div class="projektleitung box">
            <div class="content">
            <?php if ($page->projektleitung()->isNotEmpty()): ?>
            <h1 lang="de">Projektleitung</h3>
            <p><?= $page->projektleitung() ?></p>
            <?php endif ?>
          </div>
          </div>
          <div class="wissenschaftlich box">
            <div class="content">
            <?php if ($page->wissenschaftlich()->isNotEmpty()): ?>
            <h1>Wissenschaftliche Bearbeitung und Koordination</h3>
            <p><?= $page->wissenschaftlich() ?></p>
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

<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
