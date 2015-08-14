<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

  <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>

<body id="page-top">

  <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
    <div class="container">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand">
          <span class="light"><?php echo $site->title()->html() ?></span>
        </a>
      </div>

      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <?php foreach($pages->visible() as $p): ?>
          <li>
            <a <?php e($p->isOpen(), ' class="active page-scroll"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

            <!--<?php if($p->hasVisibleChildren()): ?>
            <ul class="submenu">
              <?php foreach($p->children()->visible() as $p): ?>
              <li>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
              </li>
              <?php endforeach ?>
            </ul>
            <?php endif ?>-->

          </li>
          <?php endforeach ?>
        </ul>
      </div>

    </div>
  </nav>

  <header id="myCarousel" class="carousel slide">

      <!-- Wrapper for Slides -->
      <div class="carousel-inner">
          <div class="item active">
              <!-- Set the first background image using inline CSS below. -->
              <div class="fill" style="background-image:url('/assets/images/theDraftphone.jpg');"></div>

          </div>
          <div class="item">
              <!-- Set the second background image using inline CSS below. -->
              <div class="fill" style="background-image:url('/assets/images/ibisInUse.jpg');"></div>

          </div>
          <div class="item">
              <!-- Set the third background image using inline CSS below. -->
              <div class="fill" style="background-image:url('/assets/images/meterUser.jpg');"></div>
          </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
      </a>
  </header>