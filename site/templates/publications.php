<?php snippet('header') ?>

<div class="row">
  <section class="col-xs-12">
    <h3 class="heading-small m-b-2">Publications</h3>
  </section>
</div>
<div class="row">
  <?php foreach ($page->children() as $publication): ?>
    <?php if ($publication->hasImages()): ?>
      <div class="col-xs-6 col-sm-4 col-md-3">
        <a class="text-hide publication-link" href="<?php echo $publication->url() ?>" style="background-image:url('<?php echo $publication->images()->first()->resize(255, 255)->url() ?>')" alt="<?php echo $publication->title() ?>"><?php echo $publication->title() ?></a>
      </div>
    <?php else: ?>
      <div class="col-xs-6 col-sm-4 col-md-3">
        <a class="publication-link" href="<?php echo $publication->url() ?>" alt="<?php echo $publication->title() ?>"><?php echo $publication->title() ?></a>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
<div class="row">
  <section class="col-xs-12">
    <?php echo $page->text()->kt() ?>
  </section>
</div>
<?php snippet('footer') ?>
