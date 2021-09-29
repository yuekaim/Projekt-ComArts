<?= css('assets/css/menu.css') ?>

<div class="body-flex">


  <div class="top">
    Kollaborative, kollektive, aktivistivi
  </div>

  <div class="menu">
    <a href="#">
      <div class="menu-item">ComArts</div>
    </a>
    <a href="<?= $site->find('activities')->url() ?>">
      <div class="menu-item">Activities</div>
    </a>
    <a href="#">
      <div class="menu-item">Library</div>
    </a>
    <a href="#">
      <div class="menu-item">Community</div>
      <a href="<?= $site->find('Community')->url() ?>">
    </a>
    <a href="#">
      <div class="menu-item">Impressum</div>
      <a href="<?= $site->find('Impressum')->url() ?>">
    </a>
    <!-- <div class="menu-item"> -->
      <label class="switch" class="menu-item">
        <input type="checkbox">
        <span class="slider round"></span>
      </label>
    <!-- </div> -->
  </div>
