<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="images">
      <?php foreach ($page->images()->sortBy('sort', 'asc') as $image): ?>
        <?php if ($image->extension() == "gif"): ?>
          <img class="portfolioitem-image" src="<?php echo $image->url() ?>">
        <?php else: ?>
          <img class="portfolioitem-image" src="<?php echo thumb($image, array('width' => 1300, 'quality' => 94))->url() ?>">
        <?php endif ?>
        <?php echo $image->caption()->kirbytext(); ?>
      <?php endforeach ?>
    </div>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>