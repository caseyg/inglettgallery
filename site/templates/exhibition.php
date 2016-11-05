<?php snippet('header') ?>

  <?php if ($page->images()->count() > 1): ?>
    <?php snippet('slider') ?>
  <?php else: ?>
    <div class="row">
      <?php $featured_image = $page->images()->first() ?>
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
      <li class="list-inline-item"><a href="/exhibitions/past">Current</a></li>
      <li class="list-inline-item"><a href="/exhibitions/past">Past</a></li>
      <li class="list-inline-item"><a href="/exhibitions/upcoming">Upcoming</a></li>
    </ul>
    <ul class="list-unstyled">
      <?php if ($page->artists()->isNotEmpty()): ?><li><a href="/artists/<?php echo $page->artists()->first() ?>">Artist Page</a></li><?php endif; ?>
      <?php if ($page->hasDocuments()): ?><li><a href="<?php echo $page->documents()->first()->url() ?>">Press Release</a></li><?php endif; ?>
      <li><a href="#">Publications</a></li>
      <li><a href="#">Select Press</a></li>
    </ul>
  </section>
  <section class="col-md-8">
    <h1><span class="text-uppercase"><?php snippet('exhibition-title', $data = array('exhibition' => $page)) ?></h1>
    <?php echo $page->text()->kt() ?>
    <p>
      <a href="/exhibitions"><i class="fa fa-chevron-left" aria-hidden="true"></i> Exhibitions</a>
    </p>
  </section>
</div>

<?php snippet('footer') ?>
