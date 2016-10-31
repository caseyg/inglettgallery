<?php snippet('header') ?>

<div class="row">

  <?php
  $represented = $page->children()->filterBy('Status', 'represented')->sortBy('last_name', 'asc');
  $exhibited = $page->children()->filterBy('Status', 'exhibited')->sortBy('last_name', 'asc');
  ?>

  <section class="col-xs-6 col-md-3 col-lg-2">
    <h3 class="heading-small m-b-2">Artists Represented</h3>
    <ul class="list-unstyled artists-list">
      <?php foreach($represented as $p): ?>

        <?php if($p->featured_image()->isNotEmpty()): ?>
          <?php $featured_image = $p->image($p->featured_image()) ?>
        <?php elseif($p->images()): ?>
          <?php $featured_image = $p->images()->first() ?>
        <?php endif; ?>

      <li><a class="artist-link" <?php if($featured_image): ?>data-featured="<?php echo thumb($featured_image, array('width' => 800, 'height' => 500))->url() ?>"<?php endif ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
      <?php endforeach ?>
    </ul>
  </section>

  <section class="col-xs-6 col-md-3 col-lg-2">
    <h3 class="heading-small m-b-2">Artists Exhibited</h3>
    <ul class="list-unstyled artists-list">
      <?php foreach($exhibited as $p): ?>

        <?php if ($p->featured_image()->isNotEmpty()): ?>
          <?php $featured_image = $p->image($p->featured_image()) ?>
        <?php elseif($p->images()->first()): ?>
          <?php $featured_image = $p->images()->first() ?>
        <?php endif; ?>

      <li class="artist-link" <?php if($featured_image): ?>data-featured="<?php echo thumb($featured_image, array('width' => 800, 'height' => 500))->url() ?>"<?php endif ?>><a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
      <?php endforeach ?>
    </ul>
  </section>

  <div class="hidden-sm-down col-md-6 col-lg-8">
    <figure id="featured-image" style="width:800px;max-width:100%;height:500px;background-size:fit;background-repeat:no-repeat;background-position:center;">
  </div>

</div>


<script type="text/javascript">
$(".artist-link").hover(function() {
  $("#featured-image").css({"background-image":"url(" + $(this).data('featured') + ")"});
});
</script>

<?php snippet('footer') ?>
