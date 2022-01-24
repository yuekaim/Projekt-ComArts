<div class="filter hflex">

  <!-- <button class="btn active" onclick="filterSelection('all')">Show all</button>
  <button class="btn" onclick="filterSelection('publikation')">Publikation</button>
  <button class="btn" onclick="filterSelection('podcast')">Podcast</button>
  <button class="btn" onclick="filterSelection('video')">Video</button> -->
  <a href="<?= $site->find('wohnzimmer')->url() ?>">
    <div class="menu-item<?php if(Url::query(Url::current()) == '') echo ' highlighted"' ?>" id="all">alles</div>
  </a>
  <a href="<?= $site->find('wohnzimmer')->url() ?>?publikations">
    <div class="menu-item<?php if(Url::query(Url::current()) == 'publikations=') echo ' highlighted"' ?>" id="podcasts">lesen</div>
  </a>
  <a href="<?= $site->find('wohnzimmer')->url() ?>?podcasts">
    <div class="menu-item<?php if(Url::query(Url::current()) == 'podcasts=') echo ' highlighted"' ?>" id="podcasts">hören</div>
  </a>
  <a href="<?= $site->find('wohnzimmer')->url() ?>?videos">
    <div class="menu-item<?php if(Url::query(Url::current()) == 'videos=') echo ' highlighted"' ?>" id="videos">schauen</div>
  </a>


</div>
