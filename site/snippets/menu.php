<?= css('assets/css/menu.css') ?>
<?= js('assets/js/script.js') ?>

  <div class="menu">
    <a href="<?= $site->homePage()->url() ?>">
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
<<<<<<< HEAD
    <a href="<?= $site->find('impressium')->url() ?>">
      <div class="menu-item" id="impressium">Impressium</div>
=======
    <a href="<?= $site->find('impressum')->url() ?>">
      <div class="menu-item" id="impressum">Impressum</div>
>>>>>>> parent of ffeeab2 (content)

    </a>
    <!-- <div class="menu-item"> -->
      <label class="switch" class="menu-item">
        <input type="checkbox">
        <span class="slider round"></span>
      </label>
    <!-- </div> -->
  </div>
