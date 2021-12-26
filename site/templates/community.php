
<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>
  <?php snippet('keywords') ?>

  <div class="body-nomenu hflex">

        <div class="about box">

            <h1>About</h1>
            <p><?= $page->about() ?></p>

        </div>
        <div class="kontakt">

            <!-- <h1>Kontakt</h1> -->
          <div class="projektleitung box">
            <?php if ($page->projektleitung()->isNotEmpty()): ?>
            <h3>Projektleitung</h3>
            <p><?= $page->projektleitung() ?></p>
            <?php endif ?>
          </div>
          <div class="wissenschaftlich box">
            <?php if ($page->wissenschaftlich()->isNotEmpty()): ?>
            <h3>Wissenschaftliche Bearbeitung und Koordination</h3>
            <p><?= $page->wissenschaftlich() ?></p>
            <?php endif ?>
          </div>
          <div class="fands box">
            <?php if ($page->fands()->isNotEmpty()): ?>
            <h3>Freie & Studierendenmitarbeiter:innen</h3>
            <p><?= $page->fands() ?></p>
            <?php endif ?>
          </div>
          <div class="netzwerk box">
            <?php if ($page->netzwerk()->isNotEmpty()): ?>
            <h3>Netzwerk</h3>
            <p><?= $page->netzwerk() ?></p>
            <?php endif ?>
          </div>

            <!-- <p><?= $page->teamKontakt() ?></p> -->

        </div>
    </div>


</div>

<?php snippet('bottom') ?>
