
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
            $posts = page('library')
              ->children()
              ->filterBy('template', 'publikation');
          };
          if ($query == "podcasts="){
            $posts = page('library')
              ->children()
              ->filterBy('template', 'podcast');
          };
          if ($query == "videos="){
            $posts = page('library')
              ->children()
              ->filterBy('template', 'video');
          };

        ?>
        <?php foreach ($posts as $post): ?>
          <a href="<?= $post->url() ?>"><div class="activity vflex <?php $post->template() ?>">
              <div class="preview hflex">
                <?php if($image = $post->cover()->toFile()): ?>
                  <img class="preview-img" src="<?= $image->url() ?>" alt="">
                <?php endif ?>
                <div class="preview-info">
                  <p><?= $post->template() ?></p>

                  <h1><?= $post->headline() ?></h1>
                  <span><?= $post->person() ?></span>
                  <span><?= $post->date() ?></span>
                  <p><?= $post->metaInfo() ?></p>
                </div>
              </div>
            </div></a>
        <?php endforeach; ?>

      </div>
    </div>

  </div>
</div>

<?php snippet('bottom') ?>
<?= css('assets/css/media-queries.css') ?>
