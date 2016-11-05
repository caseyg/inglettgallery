<?php snippet('header') ?>

<div class="row">
  <figure class="col-xs-12 col-md-6">
    <img class="img-fluid" src="<?php echo thumb($page->images()->first(), array('width' => 800, 'height' => 600))->url() ?>" alt="<?php echo $page->title() ?>" />
  </figure>
  <section class="col-md-6">
    <?php if ($page->artists()->isNotEmpty()): ?><h3 class="m-b-2"><a href="/artists/<?php echo $page->artists()->first() ?>"><?php $artist = $pages->find('artists')->children()->find($page->artists()->first()); echo $artist->first_name() . " " . $artist->last_name() ?></a></h3><?php endif; ?>

    <?php echo $page->text()->kt() ?>
  </section>
</div>
<hr>
<section class="row back">
  <a class="col-xs-12" href="/publications"><i class="fa fa-chevron-left" aria-hidden="true"></i> Publications</a>
</section>

<?php snippet('footer') ?>
