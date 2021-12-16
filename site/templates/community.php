
<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper">
  <?php snippet('menu') ?>

  <div class="body-nomenu">

    <div class="hflex">
        <div class="about box">

            <h1>About</h1>
            <p><?= $page->about() ?></p>

        </div>
        <div class="kontakt box">

            <h1>Kontakt</h1>
            <?= if $page->projektleitung(): ?>
            <h3>Projektleitung</h3>
            <p><?= $page->projektleitung() ?></p>
            <?= endif ?>

            <?= if $page->wissenschaftlich(): ?>
            <h3>Wissenschaftliche Bearbeitung und Koordination</h3>
            <p><?= $page->wissenschaftlich() ?></p>
            <?= endif ?>

            <?= if $page->fands(): ?>
            <h3>Freie & Studierendenmitarbeiter:innen</h3>
            <p><?= $page->fands() ?></p>
            <?= endif ?>



            <!-- <p><?= $page->teamKontakt() ?></p> -->

        </div>
    </div>

  </div>

</div>

<?php snippet('bottom') ?>
