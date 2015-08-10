<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="image">
      <!-- <img class="portfolio-image" src="<?php echo $page->images()->first()->url() ?>"> -->
      <img class="contact-image" src="<?php echo thumb($page->images()->first(), array('width' => 800))->url(); ?>">
    </div>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>