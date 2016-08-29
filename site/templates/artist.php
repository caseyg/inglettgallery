<?php snippet('header') ?>

<div class="row">
  <?php if ($page->featured_image()): ?>
    <?php $featured_image = $page->image($page->featured_image()) ?>
  <?php elseif($page->images()->first()): ?>
    <?php $featured_image = $page->images()->first() ?>
  <?php endif; ?>
  <?php if($featured_image): ?>
  <figure class="col-xs-12">
    <img class="img-fluid" src="<?php echo thumb($featured_image, array('width' => 1110, 'height' => 800))->url() ?>" alt="<?php echo $featured_image->title() ?>" />
    <figcaption>
      <?php if ($featured_image->image_title()): ?><?php echo $featured_image->image_title()->html() ?>,<?php endif ?>
      <?php if ($featured_image->image_date()): ?><?php echo $featured_image->image_date() ?>,<?php endif ?>
      <?php if ($featured_image->image_media()): ?><?php echo $featured_image->image_media()->html() ?>,<?php endif ?>
      <?php if ($featured_image->image_dimensions()): ?><?php echo $featured_image->image_dimensions() ?>,<?php endif ?>
    </figcaption>
  </figure>
  <?php endif ?>
</div>

<div class="row">
  <section class="col-md-4">
    <?php echo $page->text()->kt() ?>
    <?php $bio = $page->documents()->filterBy('filename', '*=', 'bio')->first(); ?>
    <ul class="list-unstyled">
      <?php if ($bio->exists()): ?><li><a href="<?php echo $bio->url() ?>">Biography</a></li><?php endif; ?>
      <li><a href="#">Publications</a></li>
        <?php if ($page->children()->find('press')): ?><li><a href="<?php echo $page->children()->find('press')->url() ?>">Select Press</a></li><?php endif; ?>
      <li><a href="#">Exhibition History</a></li>
    </ul>
  </section>
  <section class="col-md-8">
    <h1><?php echo $page->title()->html() ?></h1>
    <p>
      <a href="/artists"><i class="fa fa-chevron-left" aria-hidden="true"></i> Artists</a>
    </p>
  </section>
</div>

<?php snippet('footer') ?>
