
<?= css('assets/css/menu.css') ?>

  <div class="menu">
    <a href="<?= $site->find('home')->url() ?>">
      <div class="menu-item<?php if($site->find('home')->isActive()) echo ' highlighted"' ?>" id="comarts">ComArts</div>
    </a>
    <a href="<?= $site->find('aktivitaeten')->url() ?>">
      <div class="menu-item<?php if($site->find('aktivitaeten')->isOpen()) echo ' highlighted"' ?>" id="activities">Aktivitäten</div>
    </a>
    <a href="<?= $site->find('wohnzimmer')->url() ?>">
      <div class="menu-item<?php if($site->find('wohnzimmer')->isOpen()) echo ' highlighted"' ?>" id="library">Wohnzimmer</div>
    </a>
    <a href="<?= $site->find('community')->url() ?>">
      <div class="menu-item<?php if($site->find('community')->isActive()) echo ' highlighted"' ?>" id="community">Community</div>
    </a>
    <a href="<?= $site->find('impressum')->url() ?>">
      <div class="menu-item<?php if($site->find('impressum')->isActive()) echo ' highlighted"' ?>" id="impressum">Impressum</div>
    </a>

    <!-- <div class="menu-item"> -->
    <!--
      <label class="switch" class="menu-item">
        <input type="checkbox">
        <span class="slider round"></span>
      </label>
    -->
    <!-- </div> -->
  </div>
