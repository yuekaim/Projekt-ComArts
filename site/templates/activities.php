<?php snippet('header') ?>

<h1><?= $page->title() ?></h1>
<div class="content">
  <div class="post-list">
    <?php $posts = $page->children()->published() ?>
    <?php foreach ($posts as $post): ?>
      <div class="activity">
        <div class="preview">
          <?php if($image = $page->cover()->toFile()): ?>
            <img src="<?= $image->url() ?>" alt="">
          <?php endif ?>
          <h1><?= $post->headline() ?></h1>
          <span><?= $post->person() ?></span>
          <span><?= $post->from() ?></span>
          <span><?= $post->fromT() ?></span>
          <span><?= $post->to() ?></span>
          <span><?= $post->toT() ?></span>
          <p><?= $post->metaInfo() ?></p>
        </div>
        

      </div>
    <?php endforeach; ?>

  </div>
</div>
