<div class="main">
  <?php $tags= $post->tags() ?>
  <span><?php echo $tags ?></span>
  <div class="content">
    <?php foreach ($post->content()->toBlocks() as $block): ?>
      <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
        <?= $block ?>
        </div>
      <?php endforeach ?>
    <div class="files">
      <?php $pdfs =  $page->pdf()->toFiles();
      foreach($pdfs as $pdf): ?>
      <span id="download"><a href="<?= $pdf->url() ?>" download="proposed_file_name">Download PDF</a></span>
      <?php endforeach ?>
    </div>
  </div>
</div>
