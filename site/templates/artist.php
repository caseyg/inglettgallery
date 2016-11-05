<?php snippet('header') ?>

<?php snippet('slider') ?>

<div class="row">
  <section class="col-md-4">
    <?php echo $page->text()->kt() ?>
    <?php $bio = $page->documents()->filterBy('filename', '*=', 'bio')->first(); ?>
    <ul class="list-unstyled">
      <?php if ($bio): ?><li><a href="<?php echo $bio->url() ?>">Biography</a></li><?php endif; ?>
      <li><a href="#">Publications</a></li>
        <?php if ($page->children()->find('press')->files()->count() > 0): ?><li><a href="<?php echo $page->children()->find('press')->url() ?>">Select Press</a></li><?php endif; ?>
      <li><a href="#">Exhibition History</a></li>
    </ul>
  </section>
  <section class="col-md-8">
    <h1><?php echo $page->first_name()->html() ?> <?php echo $page->last_name()->html() ?></h1>
    <p>
      <a href="/artists"><i class="fa fa-chevron-left" aria-hidden="true"></i> Artists</a>
    </p>
  </section>
</div>

<?php snippet('footer') ?>
