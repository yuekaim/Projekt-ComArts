

  <div class="menu">
    <a href="<?= $site->find('home')->url() ?>">
      <div class="menu-item" id="comarts">ComArts</div>
    </a>
    <a href="<?= $site->find('activities')->url() ?>">
      <div class="menu-item" id="activities">Activities</div>
    </a>
    <a href="<?= $site->find('library')->url() ?>">
      <div class="menu-item" id="library">Library</div>
    </a>
    <a href="<?= $site->find('community')->url() ?>">
      <div class="menu-item" id="community">Community</div>
    </a>
    <a href="<?= $site->find('impressium')->url() ?>">
      <div class="menu-item" id="impressum">Impressium</div>
    </a>
    <!-- <div class="menu-item"> -->
      <label class="switch" class="menu-item">
        <input type="checkbox">
        <span class="slider round"></span>
      </label>
    <!-- </div> -->
  </div>
