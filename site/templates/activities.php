<?= css('assets/css/styles.css') ?>

<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="content">
  <div class="post-list">
    <?php $posts = $page->children()->published() ?>
    <?php foreach ($posts as $post): ?>
      <div class="activity">
        <div class="preview">
          <?php if($post->cover()): ?>
            <img src="<?= $post->cover()->url() ?>" alt="">
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

<?php snippet('bottom') ?>
