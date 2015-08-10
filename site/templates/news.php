<?php snippet('header') ?>

  <main class="main" role="main">

    <?php foreach($page->children()->visible() as $news): ?>

      <div class="news-item">

        <div class="news-item-images">
          <?php foreach($news->images() as $image): ?>
            <img class="news-item-image" src="<?php echo thumb($image, array('width' => 1000))->url(); ?>">
          <?php endforeach ?>
        </div>

        <div class="news-item-text">
          <!-- <h3><?php echo $news->title()->html() ?></h3> -->

          <?php if($news->date() != ""): ?>
            <div class="news-item-text-date"><?php echo $news->date('d M y') ?></div>
          <?php endif ?>

          <?php echo $news->text()->kirbytext() ?>
        </div>

      </div>

    <?php endforeach ?>

  </main>

<?php snippet('footer') ?>