<?php snippet('header') ?>

  <div class="portfolio-all">          

      <?php $x = 0; foreach($page->children()->visible() as $child): ?>
      <?php $logo = $child->find('logo')->files(); ?>

      <?php if ($x++%16) : ?>

        <div class="portfolio-wrapper">
          <div class="portfolio-cell" style="background: url('<?php echo $logo->first()->url() ?>') #f2f2f2 center center no-repeat">
            <div class="portfolio-cell-title">
              <?php echo $child->title()->html() ?>
            </div>
            <a href="<?php echo $child->url() ?>">
              <div class="portfolio-cell-layer" style="background: url('<?php echo $logo->last()->url() ?>') center center no-repeat"></div>
            </a>
          </div>
        </div>

      <?php else: ?>

          </span> <span class="portfolio-grid">
          <div class="portfolio-wrapper">
            <div class="portfolio-cell" style="background: url('<?php echo $logo->first()->url() ?>') #f2f2f2 center center no-repeat">

              <div class="portfolio-cell-title">
                <?php echo $child->title()->html() ?>
              </div>

              <a href="<?php echo $child->url() ?>">
                <div class="portfolio-cell-layer" style="background: url('<?php echo $logo->last()->url() ?>') center center no-repeat"></div>
              </a>

            </div>
          </div>
      <?php endif ?>

    <?php endforeach ?>

  </div>



  <div class="portfolio-all-mobile">          

      <?php $x = 0; foreach($page->children()->visible() as $child): ?>
      <?php $logo = $child->find('logo')->files(); ?>

      <?php if ($x++%8) : ?>

        <div class="portfolio-wrapper">
          <div class="portfolio-cell" style="background: url('<?php echo $logo->first()->url() ?>') #f2f2f2 center center no-repeat">
            <div class="portfolio-cell-title">
              <?php echo $child->title()->html() ?>
            </div>
            <a href="<?php echo $child->url() ?>">
              <div class="portfolio-cell-layer" style="background: url('<?php echo $logo->last()->url() ?>') center center no-repeat"></div>
            </a>
          </div>
        </div>

      <?php else: ?>

          </span> <span class="portfolio-grid">
          <div class="portfolio-wrapper">
            <div class="portfolio-cell" style="background: url('<?php echo $logo->first()->url() ?>') #f2f2f2 center center no-repeat">

              <div class="portfolio-cell-title">
                <?php echo $child->title()->html() ?>
              </div>

              <a href="<?php echo $child->url() ?>">
                <div class="portfolio-cell-layer" style="background: url('<?php echo $logo->last()->url() ?>') center center no-repeat"></div>
              </a>

            </div>
          </div>
      <?php endif ?>

    <?php endforeach ?>

  </div>  

<?php snippet('footer') ?>