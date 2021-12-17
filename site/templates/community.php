
<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>

  <div class="body-nomenu hflex">

        <div class="about box">

            <h1>About</h1>
            <p><?= $page->about() ?></p>

        </div>
        <div class="kontakt box">

            <h1>Kontakt</h1>
            <?php if ($page->projektleitung()->isNotEmpty()): ?>
            <h3>Projektleitung</h3>
            <p><?= $page->projektleitung() ?></p>
            <?php endif ?>

            <?php if ($page->wissenschaftlich()->isNotEmpty()): ?>
            <h3>Wissenschaftliche Bearbeitung und Koordination</h3>
            <p><?= $page->wissenschaftlich() ?></p>
            <?php endif ?>

            <?php if ($page->fands()->isNotEmpty()): ?>
            <h3>Freie & Studierendenmitarbeiter:innen</h3>
            <p><?= $page->fands() ?></p>
            <?php endif ?>



            <!-- <p><?= $page->teamKontakt() ?></p> -->

        </div>
    </div>


</div>

<?php snippet('bottom') ?>
