<div class="slider swiper-container m-b-2">
  <div class="swiper-wrapper">
    <?php
    foreach($page->images() as $image):
      $exhibition = $pages->find('exhibitions')->children()->find($image->exhibition()); ?>
        <div class="swiper-slide" data-hash="<?php echo str::slug($image->name()) ?>">
          <figure data-background="<?php echo $image->resize(1110, 616)->url() ?>" class="swiper-lazy img-fluid m-b-1" alt="<?php snippet('caption', $data = array('image' => $image))?>"></figure>
          <p><?php snippet('caption', $data = array('image' => $image))?></p>
        </div>
    <?php endforeach ?>
  </div>

  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
  <script>
  var mySwiper = new Swiper ('.swiper-container', {
    centeredSlides: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    hashnav: true,
    hashnavWatchState: true,
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
