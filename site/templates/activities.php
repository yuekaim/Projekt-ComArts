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
        <div class="main">
          <?php $tags= $post->tags() ?>
          <span><?php echo $tags ?></span>
          <div class="content">
          <?php foreach ($post->myBlocksField()->toBlocks() as $block): ?>
            <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
              <?= $block ?>
              </div>
          <div class="files">
            <?php $pdfs =  $page->pdf()->toFiles();
            foreach($pdfs as $pdf): ?>
            <span id="download"><a href="<?= $pdf->url() ?>" download="proposed_file_name">Download PDF</a></span>
            <?php endforeach ?>

          </div>
            </div>
          <?php endforeach ?>
        </div>

      </div>
    <?php endforeach; ?>

  </div>
</div>
