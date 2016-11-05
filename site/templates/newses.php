<?php snippet('header') ?>

<div class="row">
  <section class="col-md-4">
    <h3 class="heading-small">News</h3>
    <li class="news-item m-b-2"><a href="/news" style="border-bottom: none;"><?php if (kirby()->request()->params()->artist()):?>Recent News<?php else: ?><strong>Recent News</strong><?php endif ?></a></li>

    <h3 class="heading-small">By Artist</h3>
    <ul class="list-unstyled artists-list">
      <?php
      $artists = $page->children()->visible()->filterBy('artists', '!=', '')->groupBy('artists');
      foreach($artists as $artist => $items):
      $artist = $pages->find('artists')->children()->visible()->find($artist); ?>
        <li><a <?php if (kirby()->request()->params()->artist() == $artist->slug()): ?>class="font-weight-bold"<?php endif; ?> href="/news/artist:<?php echo $artist->slug() ?>"><?php echo $artist->first_name() . " " . $artist->last_name() ?></a></li>
      <?php endforeach ?>
    </ul>
  </section>
  <section class="col-md-8">
      <?php if (kirby()->request()->params()->artist()):
        $newses = $page->children()->visible()->filterBy('artists', kirby()->request()->params()->artist())->flip();
      else:
        $newses = $page->children()->visible()->flip()->limit(20);
      endif; ?>
      <?php foreach($newses as $news): ?>
        <div class="news-item m-b-2">
          <p class="d-block">
            <small>
              <strong>
                <?php if ($news->display_date()->isNotEmpty()): ?>
                  <?php echo $news->display_date() ?>
                <?php else: ?>
                  <?php echo $news->date("d F Y") ?>
                <?php endif; ?>
              </strong>
              <?php if (!kirby()->request()->params()->artist()):?>
                <span>—</span>
                <?php if ($news->artists()->isNotEmpty()):
                  $artist = $pages->find('artists')->children()->visible()->find($news->artists()->first()); ?>
                  <a href="/artists/<?php echo $artist->slug() ?>"><?php echo $artist->first_name() . " " . $artist->last_name() ?></a>
                <?php endif; ?>
              <?php endif ?>
            </small>
          </p>
          <div class="lead">
            <?php echo $news->text()->kt() ?>
            <?php if ($news->hasFiles()): ?> <small><a class="m-l-1" href="<?php echo $news->files()->first()->url() ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></small> <?php endif; ?>
          </div>
        </div>
        <hr>
      <?php endforeach; ?>
  </section>
</div>

<?php snippet('footer') ?>
