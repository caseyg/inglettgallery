<?php snippet('header') ?>

<?php $current = $page->children()->visible()->filter(function($child) {
            return $child->date(null, 'start') < time() && $child->date(null, 'end') < time();
});?>

<?php if ($current->exists()): ?>
<div class="row">
  <?php $featured_image = $current->images()->first() ?>
  <?php if($featured_image): ?>
  <figure class="col-xs-12">
    <img class="img-fluid" src="<?php echo thumb($featured_image, array('width' => 1110, 'height' => 800))->url() ?>" alt="<?php echo $featured_image->title() ?>" />
    <figcaption>
      <?php snippet('caption', $data = array('image' => $featured_image))?>
    </figcaption>
  </figure>
  <?php endif ?>
</div>
<?php endif; ?>

<div class="row">
  <section class="col-md-4">
    <h3 class="heading-small m-b-2">Exhibitions</h3>
    <ul class="list-unstyled list-inline text-uppercase">
      <li class="list-inline-item"><strong>Current</strong></li>
      <li class="list-inline-item"><a href="/exhibitions/past">Past</a></li>
      <li class="list-inline-item"><a href="/exhibitions/upcoming">Upcoming</a></li>
    </ul>
    <?php if ($current->exists()): ?>
    <ul class="list-unstyled">
      <?php if ($current->artists()->isNotEmpty()): ?><li><a href="/artists/<?php echo $current->artists()->first() ?>">Artist Page</a></li><?php endif; ?>
      <?php if ($current->hasDocuments()): ?><li><a href="<?php echo $current->documents()->first()->url() ?>">Press Release</a></li><?php endif; ?>
      <li><a href="#">Publications</a></li>
      <li><a href="#">Select Press</a></li>
    </ul>
  <?php endif ?>
  </section>
  <section class="col-md-8">
    <?php if ($current->exists()): ?>
    <h1><span class="text-uppercase"><?php snippet('exhibition-title', $data = array('exhibition' => $current)) ?></h1>
    <?php echo $current->text()->kt() ?>
    <?php else: ?>
      <h1>No Current Exhibitions</h1>
    <?php endif ?>
  </section>
</div>

<?php snippet('footer') ?>
