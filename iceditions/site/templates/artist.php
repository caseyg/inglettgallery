<?php snippet('header') ?>

<div class="slider m-b-2">
<?php if ($page->images()->count() > 1): ?>
  <?php snippet('slider') ?>
<?php else: ?>
  <figure style="background-image: url(<?php echo $page->images()->first()->resize(1110, 616)->url() ?>)" class="img-fluid m-b-1" alt="<?php snippet('caption', $data = array('image' => $page->images()->first()))?>"></figure>
  <p><?php snippet('caption', $data = array('image' => $page->images()->first()))?></p>
<?php endif; ?>
</div>

<div class="row">
  <h1 class="col-xs-12 m-t-1 m-b-1"><?php echo $page->first_name()->html() ?> <?php echo $page->last_name()->html() ?></h1>
</div>

<div class="row back">
  <?php if ($page->hasDocuments()): ?>
    <section class="col-xs-12 col-md-3">
        <h2 class="heading-small">Proposal</h2>
        <small><a target="_blank" href="<?php echo $page->documents()->first()->url() ?>">Download as PDF &nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></small></p>
    </section >
  <?php endif ?>

  <div class="col-xs-12 col-md-6">
    <?php echo $page->text()->kt() ?>
  </div>
</div>

<div class="row back m-t-3">
  <a href="/artists" class="col-xs-12"><i class="fa fa-chevron-left" aria-hidden="true"></i> Artists</a>
</div>

<?php snippet('footer') ?>
