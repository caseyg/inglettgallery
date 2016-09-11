<?php snippet('header') ?>

<div class="row">
  <section class="col-md-4">
    <?php $bio = $page->parent()->documents()->filterBy('filename', '*=', 'bio')->first(); ?>
    <ul class="list-unstyled">
      <?php if ($bio): ?><li><a href="<?php echo $bio->url() ?>">Biography</a></li><?php endif; ?>
      <li><a href="#">Publications</a></li>
        <?php if ($page->parent()->find('press')): ?><li><strong>Select Press</strong></li><?php endif; ?>
      <li><a href="#">Exhibition History</a></li>
    </ul>
  </section>
  <section class="col-md-8">
    <h1><?php echo $page->title()->html() ?></h1>
    <ul class="list-unstyled">
      <?php foreach ($page->files()->flip() as $p): ?>
        <li><a href="<?php echo $p->url() ?>"><?php if ($p->title()->isNotEmpty()): ?><?php echo $p->title()->html() ?><?php else: ?><?php echo $p->filename() ?><?php endif; ?></a></li>
      <?php endforeach; ?>
    </ul>
    <p>
      <a href="<?php echo $page->parent()->url() ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> <?php echo $page->parent()->title()->html() ?></a>
    </p>
  </section>
</div>

<?php snippet('footer') ?>
