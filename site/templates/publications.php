<?php snippet('header') ?>

<div class="row">
  <section class="col-xs-12">
    <h3 class="heading-small m-b-2">Publications</h3>
  </section>
</div>
<div class="row">
  <?php foreach ($page->children()->visible() as $p): ?>
      <div class="col-xs-6 col-sm-4 col-md-3">
        <a class="text-hide publication-link" href="<?php echo $p->url() ?>" <?php if ($p->images()->count() > 0): ?>style="background-image:url(<?php echo $p->images()->first()->resize(255, 255)->url() ?>)"<?php endif; ?> alt="<?php echo $p->title() ?>"><?php echo $p->title() ?></a>
      </div>
  <?php endforeach; ?>
</div>
<div class="row">
  <section class="col-xs-12">
    <?php echo $page->text()->kt() ?>
  </section>
</div>
<?php snippet('footer') ?>
