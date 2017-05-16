<?php snippet('header') ?>

<div class="slider m-b-2">
  <figure style="background-image: url(<?php echo $page->images()->first()->resize(1110, 616)->url() ?>)" class="img-fluid m-b-1" alt="<?php snippet('caption', $data = array('image' => $page->images()->first()))?>"></figure>
  <p><?php snippet('caption', $data = array('image' => $page->images()->first()))?></p>
</div>

<div class="row">
  <h1 class="col-xs-12 m-t-1 m-b-1"><?php echo $page->first_name()->html() ?> <?php echo $page->last_name()->html() ?></h1>
</div>

<div class="row back">
  <div class="col-xs-12 col-md-6">
    <?php echo $page->text()->kt() ?>
  </div>
</div>

<div class="row back m-t-3">
  <a href="/artists" class="col-xs-12"><i class="fa fa-chevron-left" aria-hidden="true"></i> Artists</a>
</div>

<?php snippet('footer') ?>
