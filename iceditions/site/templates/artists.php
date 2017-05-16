<?php snippet('header') ?>

<div class="row">

  <section class="col-xs-6 col-md-6 col-lg-4">
    <ul class="list-unstyled artists-list">
      <?php foreach($page->children()->sortBy('last_name', 'asc') as $p): ?>

        <?php if($p->featured_image()->isNotEmpty()): ?>
          <?php $featured_image = $p->image($p->featured_image()) ?>
        <?php elseif($p->images()): ?>
          <?php $featured_image = $p->images()->first() ?>
        <?php endif; ?>

      <li><a class="artist-link" <?php if($featured_image): ?>data-featured="<?php echo thumb($featured_image, array('width' => 800, 'height' => 500))->url() ?>"<?php endif ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
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
