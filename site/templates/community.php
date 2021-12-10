
<?php snippet('header') ?>
<?php snippet('top') ?>

<div class="body-wrapper">
  <?php snippet('menu') ?>

  <div class="body-nomenu">

    <div class="hflex">
        <div class="about box">
          <div class="content">
            <h1>About</h1>
            <p><?= $page->about() ?></p>
          </div>
        </div>
        <div class="kontakt box">
          <div class="content">
            <h1>Kontakt</h1>
            <p><?= $page->teamKontakt() ?></p>
        </div>
        </div>
    </div>

  </div>

</div>

<?php snippet('bottom') ?>
