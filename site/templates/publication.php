<?php snippet('header') ?>

<div class="row">
  <figure class="col-xs-12 col-md-6">
    <img class="img-fluid" src="<?php echo thumb($page->images()->first(), array('width' => 800, 'height' => 600))->url() ?>" alt="<?php echo $page->title() ?>" />
  </figure>
  <section class="col-md-6">
    <?php if ($page->artists()->isNotEmpty()): ?>
        <?php foreach ($page->artists()->split() as $artist): ?>
          <h3 class="d-block"><a href="<?php echo $pages->find('artists')->children()->find($artist)->url() ?>"><?php echo $pages->find('artists')->children()->find($artist)->title() ?></a></h3>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php echo $page->text()->kt() ?>
  </section>
</div>
<section class="row back m-t-3">
  <a class="col-xs-12" href="/publications"><i class="fa fa-chevron-left" aria-hidden="true"></i> Publications</a>
</section>

<?php snippet('footer') ?>
