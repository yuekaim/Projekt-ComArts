
<div class="keywords">
  <!--
  <span>FORSCHUNG</span>
  <span>COMMUNITY</span>
  <span>INTERSEKTIONALITAET</span>
  <span>DECOLONIZE</span>
  <span>NIEDRIGSCHWELLIG</span>
  <span>BARRIEREFREI</span>
  <span>EMPOWERMENT</span>
-->


    <?php foreach ($site->finde('community')->tags()->split() as $keyword): ?>
    <span><?= $keyword ?></span>
    <?php endforeach ?>

</div>
