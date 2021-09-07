

<?php snippet('header') ?>

<h1><?= $page->title() ?></h1>
<div class="content">
  <div class="post-list">
    <?php $posts = $page->children()->listed() ?>
    <?php foreach ($posts as $post): ?>
    <div class="activity">
      <h1><?= $post->headline() ?></h1>
      <span><?= $post->person() ?></span>
    </div>
  <?php endforeach; ?>

  </div>
</div>
