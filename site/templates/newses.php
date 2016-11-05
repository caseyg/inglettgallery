<?php snippet('header') ?>

<div class="row">
  <section class="col-md-4">
    <h3 class="heading-small m-b-2"><a href="/news">Recent News</a></h3>
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
    <ul class="list-unstyled">
      <?php if (kirby()->request()->params()->artist()):
        $newses = $page->children()->visible()->filterBy('artists', kirby()->request()->params()->artist())->flip();
      else:
        $newses = $page->children()->visible()->flip()->limit(20);
      endif; ?>
      <?php foreach($newses as $news): ?>
        <li class="news-item m-b-2">
          <strong>
          <?php if ($news->display_date()->isNotEmpty()): ?>
            <?php echo $news->display_date() ?>
          <?php else: ?>
            <?php echo $news->date("d F Y") ?>
          <?php endif; ?>
          </strong>
          <span>—</span>
          <?php if ($news->artists()->isNotEmpty()):
            $artist = $pages->find('artists')->children()->visible()->find($news->artists()->first()); ?>
            <a href="/artists/<?php echo $artist->slug() ?>"><?php echo $artist->first_name() . " " . $artist->last_name() ?></a>
          <?php endif; ?>
          <?php echo $news->text()->kt() ?>
          <?php if ($news->hasFiles()): ?> <a class="m-l-1" href="<?php echo $news->files()->first()->url() ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a> <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
</div>

<?php snippet('footer') ?>
