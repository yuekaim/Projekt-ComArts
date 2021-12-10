
<?php snippet('header') ?>
<?= js('assets/js/marquee.js') ?>
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
            <p><?= $page->teamKontakt() ?></p>

        </div>
    </div>

  </div>

</div>

<?php snippet('bottom') ?>
