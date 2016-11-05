<?php snippet('header') ?>

<div class="slider--home swiper-container">
  <div class="swiper-wrapper">
    <?php foreach($page->images() as $image):
      $exhibition = $pages->find('exhibitions')->children()->find($image->exhibition()); ?>
      <?php if ($exhibition != null): ?>
        <a class="swiper-slide" href="<?php echo $exhibition->url() ?>">
          <img data-src="<?php echo $image->crop(1110, 616)->url() ?>" class="swiper-lazy" width="<?php echo $image->crop(1110, 616)->width() ?>" height="<?php echo $image->crop(1110, 616)->height() ?>" alt="">
          <figcaption class="m-t-1">
            <span class="m-r-1 text-uppercase"><?php snippet('exhibition-title', $data = array('exhibition' => $exhibition)) ?></span>
            <span><?php echo $exhibition->date('d F Y', 'start') ?> - <?php echo $exhibition->date('d F Y', 'end') ?></span>
          </figcaption>
        </a>
      <?php else: ?>
        <div class="swiper-slide">
          <img data-src="<?php echo $image->crop(1110, 616)->url() ?>" class="swiper-lazy" width="<?php echo $image->crop(1110, 616)->width() ?>" height="<?php echo $image->crop(1110, 616)->height() ?>" alt="">
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
