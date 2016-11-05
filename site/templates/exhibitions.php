<?php snippet('header') ?>

<?php $current = $page->children()->find($page->current()); ?>

<?php if ($current): ?>
  <?php $page = $current ?>
  <div class="row">
    <section class="col-md-4">
      <h3 class="heading-small">Exhibitions</h3>
      <ul class="list-unstyled list-inline">
        <li class="list-inline-item"><strong>Current</strong></li>
        <li class="list-inline-item"><a href="/exhibitions/past">Past</a></li>
        <li class="list-inline-item"><a href="/exhibitions/upcoming">Upcoming</a></li>
      </ul>
    </section>
  </div>
  <div class="row">
    <h1 class="col-xs-12"><a href="<?php echo $current->url() ?>"><?php snippet('exhibition-title', $data = array('exhibition' => $page)) ?></a></h1>
  </div>
  <?php if ($page->images()->count() > 1): ?>
    <hr>
    <?php snippet('slider', $data = array('page' => $page)) ?>
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

  <hr>
  <div class="row">
    <section class="col-md-4">
      <h2 class="heading-small">Press Release</h2>
      <?php if ($page->hasDocuments()): ?><small><a href="<?php echo $page->documents()->first()->url() ?>">Download as PDF &nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></small><?php endif ?></p>
      <hr class="m-t-3">
      <?php if ($page->artists()->count() > 0): ?>
        <h2 class="heading-small">Artists</h2>
        <ul class="list-unstyled">
          <?php foreach ($page->artists()->split() as $artist): ?>
            <li><a href="<?php echo $pages->find('artists')->children()->find($artist)->url() ?>"><?php echo $pages->find('artists')->children()->find($artist)->title() ?></a></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </section>
    <section class="col-md-8">
      <?php echo $page->text()->kt() ?>
    </section>

  </div>
  <hr>
  <section class="row">
    <a class="col-xs-12" href="/exhibitions"><i class="fa fa-chevron-left" aria-hidden="true"></i> Exhibitions</a>
  </section>

<?php else: ?>

  <div class="row">
    <section class="col-md-4">
      <h3 class="heading-small">Exhibitions</h3>
      <ul class="list-unstyled list-inline text-uppercase">
        <li class="list-inline-item"><strong>Current</strong></li>
        <li class="list-inline-item"><a href="/exhibitions/past">Past</a></li>
        <li class="list-inline-item"><a href="/exhibitions/upcoming">Upcoming</a></li>
      </ul>
    </section>
    <section class="col-md-8">
      <div class="lead">
        <?php echo $page->text()->kt() ?>
      </div>
    </section>
  </div>

<?php endif ?>

<?php snippet('footer') ?>
