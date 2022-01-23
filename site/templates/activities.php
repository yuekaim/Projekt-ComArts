
<?php snippet('header') ?>
<?php snippet('top') ?>

<?= css('assets/css/activities.css') ?>

<div class="body-wrapper vflex">
  <?php snippet('menu') ?>
  <div class="body-nomenu">

    <div class="content">
      <div class="post-list">
        <?php $posts = $page->children()->published() ?>
        <?php foreach ($posts as $post): ?>
          <a href="<?= $post->url() ?>"><div class="activity vflex">
              <div class="preview hflex">
                <?php if($image = $post->cover()->toFile()): ?>
                  <img class="preview-img" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                <?php endif ?>
                <div class="preview-info">
                  <h1><?= $post->headline() ?></h1>
                  <span><?= $post->person() ?></span>
                  <?php if ($post->semester()): ?>
                     <span><?= $post->semester() ?></span>
                  <?php endif ?>
                  <?php if ($post->from()): ?>
                     <span><?= $post->from()->toDate('Y.m.d') ?></span>
                  <?php endif ?>
                  <?php if ($post->fromT()): ?>
                     <span><?= $post->fromT() ?></span>
                  <?php endif ?>
                  <?php if ($post->to()): ?>
                    <span><?= $post->enddate() ?></span>
                  <?php endif ?>
                  <?php if ($post->toT()): ?>
                    <span><?= $post->toT() ?></span>
                  <?php endif ?>

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
