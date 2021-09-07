<h1><?= $page->title() ?></h1>
<p><?= $page->description()->toBlocks() ?></p>
<?php if($image = $page->cover()->toFile()): ?>
  <img src="<?= $image->url() ?>" alt="">
<?php endif ?>

<h1><?= $page->headline() ?></h1>
