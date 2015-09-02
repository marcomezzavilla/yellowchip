<?php snippet('header') ?>

<div class="main" role="main">

  <div data-scroll-index="0" data-target="first-section" class="section section1">
    <div class="text <?php ecco($page->first_block_mobile() != "", 'only-') ?>big-screen">
      <?php echo $page->first_block()->kirbytext() ?>
    </div>

    <?php if ($page->first_block_mobile() != ""): ?>
      <div class="text small-screen">
        <?php echo $page->first_block_mobile()->kirbytext() ?>
      </div>
    <?php endif ?>
  </div>

  <div data-scroll-index="1" data-target="second-section" class="section section2">
    <div class="text <?php ecco($page->second_block_mobile() != "", 'only-') ?>big-screen" >
      <?php echo $page->second_block()->kirbytext() ?>
    </div>

    <?php if ($page->second_block_mobile() != ""): ?>
      <div class="text small-screen" >
        <?php echo $page->second_block_mobile()->kirbytext() ?>
      </div>
    <?php endif ?>
  </div>

  <div class="goto"></div>

</div>

<?php snippet('footer') ?>