<?php snippet('header') ?>

<?php snippet('slider') ?>
<hr>
<div class="row">
  <h1 class="col-xs-12 m-t-3 m-b-1"><?php echo $page->first_name()->html() ?> <?php echo $page->last_name()->html() ?></h1>
</div>
<?php if ($bio): ?>
<hr>
<section id="biography" class="row">
  <div class="col-md-3">
    Biography<br>
    <small><a href="<?php echo $bio->url() ?>">Download full bio as PDF &nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></small>
  </div>
  <div class="col-md-9">
    <?php echo $page->text()->kt() ?>
  </div>
</section>
<?php endif ?>

<?php if ($exhibitions > 0): ?>
  <hr>
  <section id="exhibition-history" class="row">
    <div class="col-md-3">
      Exhibition History
    </div>
    <div class="col-md-9">
      <ul class="list-unstyled row">
        <?php
          $exhibitions = page('exhibitions')->children()->visible()->flip()->filterBy('artists',$page->slug());
          foreach ($exhibitions as $post): ?>
          <li class="p-b-1 col-md-4 col-xs-6">
            <a href="<?php echo $post->url() ?>">
              <img src="<?php echo $post->images()->first()->crop(255,255)->url() ?>" alt="<?php snippet('exhibition-title', $data = array('exhibition' => $post)) ?>" class="m-b-1" style="max-width:100%;"><br>
              <?php snippet('exhibition-title', $data = array('exhibition' => $post)) ?><br>
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
  <hr>
  <section id="publications" class="row">
    <div class="col-md-3">
      Publications
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

<?php if ($press > 0): ?>
  <hr>
  <section id="press" class="row">
    <div class="col-md-3">
      Select Press
    </div>
    <div class="col-md-9" style="column-count: 3;">
      <ol class="list-unstyled">
        <?php foreach ($page->children()->find('press')->files()->flip() as $p): ?>
          <li><a href="<?php echo $p->url() ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp; <?php if ($p->title()->isNotEmpty()): ?><?php echo $p->title()->html() ?><?php else: ?><?php echo $p->filename() ?><?php endif; ?></a></li>
        <?php endforeach ?>
      </ol>
    </div>
  </section>
<?php endif ?>

<hr>
<div class="row back">
  <a href="/artists" class="col-xs-12"><i class="fa fa-chevron-left" aria-hidden="true"></i> Artists</a>
</div>

<?php snippet('footer') ?>
