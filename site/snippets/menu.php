<?= css('assets/css/menu.css') ?>

  <div class="menu">
    <a href="<?= $site->homePage()->url() ?>">
      <div class="menu-item">ComArts</div>
    </a>
    <a href="<?= $site->find('activities')->url() ?>">
      <div class="menu-item" id="activities">Activities</div>
    </a>
    <a href="#">
      <div class="menu-item" id="library">Library</div>
    </a>
    <a href="#">
      <div class="menu-item" id="community">Community</div>

    </a>
    <a href="#">
      <div class="menu-item" id="impressum">Impressum</div>

    </a>
    <!-- <div class="menu-item"> -->
      <label class="switch" class="menu-item">
        <input type="checkbox">
        <span class="slider round"></span>
      </label>
    <!-- </div> -->
  </div>
