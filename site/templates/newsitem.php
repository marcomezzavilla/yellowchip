<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="images">
      <?php foreach ($page->images() as $image): ?>
        <!-- <img class="portfolioitem-image" src="<?php echo $image->url() ?>"> -->
        <img class="portfolioitem-image" src="<?php echo thumb($image, array('width' => 800))->url(); ?>">
      <?php endforeach ?>
    </div>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>