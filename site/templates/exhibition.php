<?php snippet('header') ?>
<div class="row">
  <section class="col-md-4">
    <h3 class="heading-small">Exhibitions</h3>
    <ul class="list-unstyled list-inline text-uppercase">
      <li class="list-inline-item"><a href="/exhibitions">Current</a></li>
      <li class="list-inline-item"><a href="/exhibitions/past"><strong>Past</strong></a></li>
      <li class="list-inline-item"><a href="/exhibitions/upcoming">Upcoming</a></li>
    </ul>
  </section>
</div>
<div class="row">
  <h1 class="col-xs-12"><span class="text-uppercase"><?php snippet('exhibition-title', $data = array('exhibition' => $page)) ?></h1>
</div>
<?php if ($page->images()->count() > 1): ?>
  <hr>
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
  <hr>
  <section class="col-md-4">
    Press Release<br>
    <?php if ($page->hasDocuments()): ?><small><a href="<?php echo $page->documents()->first()->url() ?>">Download as PDF &nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></small><?php endif ?>
  </section>
  <section class="col-md-8">
    <?php echo $page->text()->kt() ?>
  </section>

</div>
<hr>
<section class="row">
  <a class="col-xs-12" href="/exhibitions"><i class="fa fa-chevron-left" aria-hidden="true"></i> Exhibitions</a>
</section>

<?php snippet('footer') ?>
