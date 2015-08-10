<?php snippet('header') ?>

<!--
  <div class="portfolio-grid">

    <?php foreach($page->children()->visible() as $portfolio): ?>
      <?php $logo = $portfolio->find('logo')->files() ?>
      <div class="portfolio-wrapper">

        <div class="portfolio-cell" style="background: url('<?php echo $logo->first()->url() ?>') #f2f2f2 center center no-repeat">
          
          <div class="portfolio-cell-title">
            <?php echo $portfolio->title()->html() ?>
          </div>

          <a href="<?php echo $portfolio->url() ?>">
            <div class="portfolio-cell-layer" style="background: url('<?php echo $logo->last()->url() ?>') center center no-repeat"></div>
          </a>
        
        </div>

      </div>
    <?php endforeach ?>

  </div>
-->



  <?php $blocks = $page->children()->visible()->paginate(16) ?>

  <div class="portfolio-grid">
    <?php foreach($blocks as $grid): ?>

      <?php $logo = $grid->find('logo')->files() ?>
      <div class="portfolio-wrapper">

        <div class="portfolio-cell" style="background: url('<?php echo $logo->first()->url() ?>') #f2f2f2 center center no-repeat">
          
          <div class="portfolio-cell-title">
            <?php echo $grid->title()->html() ?>
          </div>

          <a href="<?php echo $grid->url() ?>">
            <div class="portfolio-cell-layer" style="background: url('<?php echo $logo->last()->url() ?>') center center no-repeat"></div>
          </a>
        
        </div>

      </div>

    <?php endforeach ?>
  </div>

  <?php if($blocks->pagination()->hasPages()): ?>
  <nav class="pagination">  

    <?php if($blocks->pagination()->hasPrevPage()): ?>
    <a class="pagination-prev" href="<?php echo $blocks->pagination()->prevPageURL() ?>">•</a>
    <?php endif ?>

    <?php if($blocks->pagination()->hasNextPage()): ?>
    <a class="pagination-next" href="<?php echo $blocks->pagination()->nextPageURL() ?>">•</a>
    <?php endif ?>

  </nav>
  <?php endif ?>

<?php snippet('footer') ?>