<?php snippet('header') ?>

<div class="slider--home swiper-container">
  <div class="swiper-wrapper">
    <?php foreach($page->images()->sortBy('sort', 'asc') as $image):
      $artist = $pages->find('artists')->children()->find($image->parent()->title()); ?>
      <?php if ($artist != null): ?>
        <a class="swiper-slide" href="<?php echo $artist->url() ?>">
          <img data-src="<?php echo $image->focusCrop(1110, 616)->url() ?>" class="swiper-lazy" width="<?php echo $image->focusCrop(1110, 616)->width() ?>" height="<?php echo $image->focusCrop(1110, 616)->height() ?>" alt="">
          <figcaption class="m-t-1">
            <span class="m-r-1 text-uppercase"><?php snippet('exhibition-title', $data = array('exhibition' => $artist)) ?></span>
            <span><?php echo $artist->date('d F Y', 'start') ?> - <?php echo $artist->date('d F Y', 'end') ?></span>
          </figcaption>
        </a>
      <?php else: ?>
        <div class="swiper-slide">
          <img data-src="<?php echo $image->focusCrop(1110, 616)->url() ?>" class="swiper-lazy" width="<?php echo $image->focusCrop(1110, 616)->width() ?>" height="<?php echo $image->focusCrop(1110, 616)->height() ?>" alt="">
        </div>
      <?php endif; ?>
    <?php endforeach ?>
  </div>

  <div class="swiper-button-next swiper-button-white"></div>
  <div class="swiper-button-prev swiper-button-white"></div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script>
var mySwiper = new Swiper ('.swiper-container', {
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  preloadImages: false,
  lazyLoading: true,
  lazyLoadingInPrevNext: true,
  loop: true,
  effect: 'fade',
  fade: {
    crossFade: true
  }
})
</script>

<?php snippet('footer') ?>
