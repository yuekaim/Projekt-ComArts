
<?php snippet('header') ?>
<?php snippet('top') ?>

<?= css('assets/css/activities.css') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>

  <!-- dropdown -->
  <?php snippet('filter') ?>
  <!-- dropdown ends -->
  <div class="body-nomenu">

    <div class="content">

      <div class="post-list">
        <?php
          $query = Url::query(Url::current());
          $posts = $page->children()->published();
          if ($query == "publikations="){
            $posts = page('wohnzimmer')
              ->children()
              ->filterBy('template', 'publikation');
          };
          if ($query == "podcasts="){
            $posts = page('wohnzimmer')
              ->children()
              ->filterBy('template', 'podcast');
          };
          if ($query == "videos="){
            $posts = page('wohnzimmer')
              ->children()
              ->filterBy('template', 'video');
          };

        ?>
        <?php foreach ($posts as $post): ?>
          <?php if ($post->isUnlisted() != true): ?>
            <a href="<?= $post->url() ?>"><div class="activity lib vflex box <?php $post->template() ?>">
                <div class="preview hflex">
                  <?php if($image = $post->cover()->toFile()): ?>
                    <img class="preview-img" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                  <?php endif ?>
                  <div class="preview-info">
                    <p class="filter"><?= $post->blueprint()->title() ?></p>

                    <h1><?= $post->headline() ?></h1>
                    <span class="libraryinfo"><?= $post->person() ?></span>
                    <span class="libraryinfo"><?= $post->date()->toDate('d.m.Y') ?></span>
                    <!-- <p class="libraryinfo"><?= $post->metaInfo() ?></p> -->
                  </div>
                </div>
              </div>
            </a>
          <?php endif ?>
        <?php endforeach; ?>

      </div>
    </div>

  </div>
</div>

<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
