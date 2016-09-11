<?php snippet('header') ?>

<div class="row">
  <section class="col-xs-12">
    <h3 class="heading-small m-b-2">Publications</h3>
  </section>
</div>
<div class="row">
  <?php foreach ($page->children() as $publication): ?>
    <a class="col-xs-6 col-sm-4 col-md-3" href="<?php echo $publication->url() ?>">
      <img class="img-fluid" src="<?php echo $publication->images()->first()->url() ?>" alt="<?php echo $publication->title() ?>" />
    </a>
  <?php endforeach; ?>
</div>

<?php snippet('footer') ?>
