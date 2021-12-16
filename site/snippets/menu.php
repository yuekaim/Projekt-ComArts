
<?= css('assets/css/menu.css') ?>

  <div class="menu">
    <a href="<?= $site->find('home')->url() ?>">
      <div class="menu-item<?php if($site->find('home')->isActive()) echo ' highlighted"' ?>" id="comarts">ComArts</div>
    </a>
    <a href="<?= $site->find('activities')->url() ?>">
      <div class="menu-item<?php if($site->find('activities')->isActive()) echo ' highlighted"' ?>" id="activities">Activities</div>
    </a>
    <a href="<?= $site->find('library')->url() ?>">
      <div class="menu-item<?php if($site->find('library')->isActive()) echo ' highlighted"' ?>" id="library">Library</div>
    </a>
    <a href="<?= $site->find('community')->url() ?>">
      <div class="menu-item<?php if($site->find('community')->isActive()) echo ' highlighted"' ?>" id="community">Community</div>
    </a>
    <a href="<?= $site->find('impressium')->url() ?>">
      <div class="menu-item<?php if($site->find('impressium')->isActive()) echo ' highlighted"' ?>" id="impressum">Impressium</div>
    </a>

    <!-- <div class="menu-item"> -->
      <label class="switch" class="menu-item">
        <input type="checkbox">
        <span class="slider round"></span>
      </label>
    <!-- </div> -->
  </div>
