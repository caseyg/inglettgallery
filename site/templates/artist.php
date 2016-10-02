<?php snippet('header') ?>

<div class="swiper-container m-b-2">
  <div class="swiper-wrapper">
    <?php
    foreach($page->images() as $image):
      $exhibition = $pages->find('exhibitions')->children()->find($image->exhibition()); ?>
        <div class="swiper-slide" data-hash="<?php echo str::slug($image->name()) ?>">
          <img data-src="<?php echo $image->resize(1110, 616)->url() ?>" class="swiper-lazy img-fluid m-b-1" width="<?php echo $image->resize(1110, 616)->width() ?>" height="<?php echo $image->resize(1110, 616)->height() ?>" alt="<?php snippet('caption', $data = array('image' => $image))?>">
          <p><?php snippet('caption', $data = array('image' => $image))?></p>
        </div>
    <?php endforeach ?>
  </div>

  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
  <script>
  var mySwiper = new Swiper ('.swiper-container', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    hashnav: true,
    preloadImages: false,
    lazyLoading: true,
    lazyLoadingInPrevNext: true,
    loop: true,
    keyboardControl: true,
    effect: 'fade',
    fade: {
      crossFade: true
    }
  })
  </script>

</div>

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
