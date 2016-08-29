<?php snippet('header') ?>
<?php $current = $page->children()->visible()->flip()->first() ?>
<div class="row">
  <?php $featured_image = $current->images()->first() ?>
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
    <h3 class="heading-small m-b-2">Exhibitions</h3>
    <ul class="list-unstyled list-inline text-uppercase">
      <li class="list-inline-item"><strong>Current</strong></li>
      <li class="list-inline-item"><a href="/exhibitions/past">Past</a></li>
      <li class="list-inline-item"><a href="/exhibitions/upcoming">Upcoming</a></li>
    </ul>
    <ul class="list-unstyled">
      <?php if ($current->artists()->isNotEmpty()): ?><li><a href="/artists/<?php echo $current->artists()->first() ?>">Artist Page</a></li><?php endif; ?>
      <?php if ($current->hasDocuments()): ?><li><a href="<?php echo $current->documents()->first()->url() ?>">Press Release</a></li><?php endif; ?>
      <li><a href="#">Publications</a></li>
      <li><a href="#">Select Press</a></li>
    </ul>
  </section>
  <section class="col-md-8">
    <h1><span class="text-uppercase"><?php echo $current->artists()->html() ?></span> <?php echo $current->title()->html() ?></h1>
    <?php echo $current->text()->kt() ?>
    <p>
      <a href="/artists"><i class="fa fa-chevron-left" aria-hidden="true"></i> Artists</a>
    </p>
  </section>
</div>

<?php snippet('footer') ?>
