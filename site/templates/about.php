<?php snippet('header') ?>

<div class="main" role="main">

  <div class="section section1">
    <div class="text <?php ecco($page->first_block_mobile() != "", 'only-') ?>big-screen">
      <?php echo $page->first_block()->kirbytext() ?>
    </div>

    <?php if ($page->first_block_mobile() != ""): ?>
      <div class="text small-screen">
        <?php echo $page->first_block_mobile()->kirbytext() ?>
      </div>
    <?php endif ?>
  </div>

  <!-- <div class="goto"></div> -->

</div>

<?php snippet('footer') ?>