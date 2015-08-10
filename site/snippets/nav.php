<nav class="nav" role="navigation">

  <ul class="nav-list">
    <?php foreach($pages->visible() as $link): ?>
    <li class="nav-list-item">
      <a <?php e($link->isOpen(), ' class="active"') ?> href="<?php echo $link->url() ?>"><?php echo $link->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>

</nav>
