<?php snippet('header') ?>

<?php snippet('slider') ?>
<div class="row">
  <h1 class="col-xs-12 m-t-1 m-b-1"><?php echo $page->first_name()->html() ?> <?php echo $page->last_name()->html() ?></h1>
</div>
<?php if ($bio): ?>
<section id="biography" class="row m-t-3">
  <div class="col-md-3">
    <h2 class="heading-small"><a href="<?php echo $bio->url() ?>">Biography</a></h2>
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
              <img src="<?php echo $post->images()->first()->crop(255,255)->url() ?>" alt="<?php snippet('exhibition-title', $data = array('exhibition' => $post)) ?>" class="m-b-1" style="max-width:100%;"><br>
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
          $exhibitions = page('publications')->children()->visible()->flip()->filterBy('artists',$page->slug());
          foreach ($exhibitions as $post): ?>
          <li class="p-b-1 col-md-4 col-xs-6">
            <a href="<?php echo $post->url() ?>">
              <img src="<?php echo $post->images()->first()->crop(255,255)->url() ?>" alt="<?php snippet('exhibition-title', $data = array('exhibition' => $post)) ?>" class="m-b-1" style="max-width:100%;"><br>
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
    <div class="col-md-9" style="column-count: 2;">
      <ol class="list-unstyled">
        <?php foreach ($page->children()->find('press')->files()->flip() as $p): ?>
          <li><a href="<?php echo $p->url() ?>" class="d-block"><?php if ($p->title()->isNotEmpty()): ?><?php echo $p->title()->html() ?><?php else: ?><?php echo $p->filename() ?><?php endif; ?></a></li>
        <?php endforeach ?>
      </ol>
    </div>
  </section>
<?php endif ?>

<div class="row back m-t-3">
  <a href="/artists" class="col-xs-12"><i class="fa fa-chevron-left" aria-hidden="true"></i> Artists</a>
</div>

<?php snippet('footer') ?>
