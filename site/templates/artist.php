<?php snippet('header') ?>

<?php snippet('slider') ?>
<div class="row">
  <h1 class="col-xs-12 m-t-1 m-b-1"><?php echo $page->first_name()->html() ?> <?php echo $page->last_name()->html() ?></h1>
</div>
<?php if ($bio): ?>
<section id="biography" class="row m-t-3">
  <div class="col-md-3">
    <h2 class="heading-small">Biography</h2>
    <small><a target="_blank" href="<?php echo $bio->url() ?>">Download as PDF &nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></small></p>
  </div>
  <div class="col-md-9">
    <?php echo $page->text()->kt() ?>
  </div>
</section>
<?php endif ?>

<?php if ($exhibitions > 0): ?>
  <section id="exhibition-history" class="row m-t-3">
    <div class="col-md-3">
      <h2 class="heading-small">Exhibition History
    </div>
    <div class="col-md-9">
      <ul class="list-unstyled row">
        <?php
          $exhibitions = page('exhibitions')->children()->visible()->flip()->filterBy('artists',$page->slug(),',');
          foreach ($exhibitions as $post): ?>
          <li class="p-b-1 col-md-4 col-xs-6">
            <a href="<?php echo $post->url() ?>">
              <?php if ($post->images()->count() > 0): ?><img src="<?php echo $post->images()->first()->focusCrop(255,255)->url() ?>" alt="<?php snippet('exhibition-title', $data = array('exhibition' => $post)) ?>" class="m-b-1" style="max-width:100%;"><br><?php endif; ?>
              <span class="title"><?php snippet('exhibition-title', $data = array('exhibition' => $post)) ?></span>
              <small class="date">
                <?php echo $post->date('d F Y', 'start') ?> - <?php echo $post->date('d F Y', 'end') ?>
              </small>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
<?php endif ?>

<?php if ($publications > 0): ?>
  <section id="publications" class="row m-t-3">
    <div class="col-md-3">
      <h2 class="heading-small">Publications</h2>
    </div>
    <div class="col-md-9">
      <ul class="list-unstyled row">
        <?php
          $exhibitions = page('publications')->children()->visible()->filterBy('artists',$page->slug());
          foreach ($exhibitions as $post): ?>
          <li class="p-b-1 col-md-4 col-xs-6">
            <a href="<?php echo $post->url() ?>">
              <?php if ($post->images()->count() > 0): ?><img src="<?php echo $post->images()->first()->focusCrop(255,255)->url() ?>" alt="<?php snippet('exhibition-title', $data = array('exhibition' => $post)) ?>" class="m-b-1" style="max-width:100%;"><br><?php endif; ?>
              <?php snippet('exhibition-title', $data = array('exhibition' => $post)) ?><br>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
<?php endif ?>

<?php if ($press > 0): ?>
  <section id="press" class="row m-t-3">
    <div class="col-md-3">
      <h2 class="heading-small">Select Press</h2>
    </div>
    <div class="col-md-9">
      <ol class="list-unstyled" style="column-count: 2;">
        <?php foreach ($page->children()->find('press')->files()->flip()->limit(8) as $p): ?>
          <li><a href="<?php echo $p->url() ?>" target="_blank" class="d-block"><?php if ($p->title()->isNotEmpty()): ?><?php echo $p->title()->html() ?><?php else: ?><?php echo $p->filename() ?><?php endif; ?></a></li>
        <?php endforeach ?>
      </ol>
      <a data-toggle="collapse" href="#press-extended" aria-expanded="false" aria-controls="press-extended">More press</a>
      <ol id="press-extended" class="collapse list-unstyled" style="column-count: 2;">
        <?php foreach ($page->children()->find('press')->files()->flip()->slice(8) as $p): ?>
          <li><a href="<?php echo $p->url() ?>" target="_blank" class="d-block"><?php if ($p->title()->isNotEmpty()): ?><?php echo $p->title()->html() ?><?php else: ?><?php echo $p->filename() ?><?php endif; ?></a></li>
        <?php endforeach ?>
      </ol>
    </div>
  </section>
<?php endif ?>

<?php if ($page->images()->count() > 0): ?>
  <section id="press" class="row m-t-3">
    <div class="col-md-3">
      <h2 class="heading-small">Additional Images</h2>
    </div>

    <div class="col-md-9">
      <div class="my-gallery row" itemscope itemtype="http://schema.org/ImageGallery">
        <?php foreach ($page->images()->sortBy('sort', 'asc') as $image): ?>
          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="p-b-1 col-md-3 col-xs-4">
            <a data-no-instant data-size="<?php echo $image->width() . 'x' . $image->height() ?>" href="<?php echo $image->url() ?>" itemprop="contentUrl">
                <?php if ($page->images()->count() > 0): ?><img src="<?php echo $image->focusCrop(255, 255)->url() ?>" itemprop="thumbnail" alt="<?php echo $image->image_title() ?>" class="img-fluid"><?php endif; ?>
            </a>
            <figcaption itemprop="caption description" class="title"><?php snippet('caption', $data = array('image' => $image))?></figcaption>
          </figure>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif ?>

<div class="row back m-t-3">
  <a href="/artists" class="col-xs-12"><i class="fa fa-chevron-left" aria-hidden="true"></i> Artists</a>
</div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<?php snippet('footer') ?>
