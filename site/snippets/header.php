<!DOCTYPE html>
<html lang="it">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/style.css') ?>
  <?php echo css('assets/css/base/logo.css') ?>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <style type="text/css">
      .container {
        opacity: 0;
        transition: opacity 1s;
      }
      .container-loaded {
        opacity: 1;
      }
  </style>

  <?php if($page->template() == "home"): ?>
    <style type="text/css">
      .typed-cursor{
        opacity: 1;
        font-weight: 100;
        -webkit-animation: blink 1.5s infinite;
        -moz-animation: blink 1.5s infinite;
        -ms-animation: blink 1.5s infinite;
        -o-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
      }
      @-keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
      }
      @-webkit-keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
      }
      @-moz-keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
      }
      @-ms-keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
      }
      @-o-keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
      }
    </style>
  <?php endif ?>

  <?php
    // echo js('assets/js/vendor/jquery-1.11.3.min.js');
    echo js('assets/js/vendor/typed.js');
    echo js('assets/js/vendor/tweetie.js');
    echo js('assets/js/vendor/scrollIt.js');
    echo js('assets/js/vendor/flickity.pkgd.min.js');
  ?>

 </head>
<body id="<?php echo $page->template() ?>" class="container">

  <header class="header" role="banner">

    <div class="logo">
      <a href="<?php echo url() ?>">
        <?php include("assets/images/logo-text.svg"); ?>
      </a>
    </div>

    <div class="logo-mobile">
      <a href="<?php echo url() ?>">
        <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
    </div>

    <div class="page-title"><?php echo $page->title()->html() ?></div>

    <img class="toggle-menu" data-target="toggle-menu" src="<?php echo url('assets/images/toggle-menu.svg') ?>">
    
    <div class="bkg-menu" data-target="bkg-menu">
      <img class="close-menu" data-target="close-menu" src="<?php echo url('assets/images/close-menu.svg') ?>">

      <ul class="bkg-nav-list">
        <?php foreach($pages->visible() as $link): ?>
        <li class="bkg-nav-list-item">
          <a <?php e($link->isOpen(), ' class="active"') ?> href="<?php echo $link->url() ?>"><?php echo $link->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>

    <?php snippet('nav') ?>

  </header>