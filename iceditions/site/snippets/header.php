<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <link data-no-instant href="//cloud.typenetwork.com/projects/307/fontface.css/" rel="stylesheet" type="text/css">
  <link data-no-instant rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
  <link data-no-instant rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
  <link data-no-instant rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css">
  <link data-no-instant rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css">
  <link data-no-instant href="/assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header class="container text-uppercase p-t-2 m-b-2">
  <div class="row">
    <h2 class="col-md-5"><a href="/" class="logo"><span class="logo-susan-inglett">I.C. Editions</span> <span class="logo-gallery">Inc.</span></a></h2>
    <nav>
      <ul class="nav nav-inline col-md-7 text-md-right">
        <?php
        $navPages = $pages->visible();
        $first = $navPages->first();
        foreach($navPages as $p): ?>
          <li class="nav-item">
            <a class="nav-link p-y-1 <?php e($p->isOpen(), ' font-weight-bold') ?><?php e($p == $first, ' p-l-1') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
        <?php endforeach ?>
        <li class="nav-item">
          <a class="nav-link" href="http://www.inglettgallery.com">susan Inglett Gallery</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <hr>
    </div>
  </div>
</header>

<main class="container">
