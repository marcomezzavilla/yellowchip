    <?php $x = 0; foreach($page->children() as $child): ?>
    <?php if ($x++%4): ?>
      <?php echo $child->title() ?>
    <?php else: ?>
      </div> <div classs="portfolio-grid">
      <?php echo $child->title() ?>
    <?php endif ?>
    <?php endforeach ?>





    // gasalo






    <?php $x = 0; foreach($page->children()->visible() as $child): ?>
    <?php $logo = $child->find('logo')->files() ?>
    <?php if ($x++%16): ?>
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
      <div class="portfolio-grid">
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














    // OLD


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



