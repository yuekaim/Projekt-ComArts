<div class="filter hflex">

  <!-- <button class="btn active" onclick="filterSelection('all')">Show all</button>
  <button class="btn" onclick="filterSelection('publikation')">Publikation</button>
  <button class="btn" onclick="filterSelection('podcast')">Podcast</button>
  <button class="btn" onclick="filterSelection('video')">Video</button> -->
  <a href="<?= $site->find('library')->url() ?>">
    <div class="menu-item<?php if(Url::query(Url::current()) == '') echo ' highlighted"' ?>" id="all">Show All</div>
  </a>
  <a href="<?= $site->find('library')->url() ?>?publikations">
    <div class="menu-item<?php if(Url::query(Url::current()) == 'publikations=') echo ' highlighted"' ?>" id="podcasts">Publikation</div>
  </a>
  <a href="<?= $site->find('library')->url() ?>?podcasts">
    <div class="menu-item<?php if(Url::query(Url::current()) == 'podcasts=') echo ' highlighted"' ?>" id="podcasts">Podcast</div>
  </a>
  <a href="<?= $site->find('library')->url() ?>?videos">
    <div class="menu-item<?php if(Url::query(Url::current()) == 'videos=') echo ' highlighted"' ?>" id="videos">Video</div>
  </a>


</div>
