<?php snippet('header') ?>

<div class="row">
  <section class="col-md-6">
    <h3 class="heading-small">Exhibitions</h3>
    <ul class="list-unstyled list-inline text-uppercase">
      <li class="list-inline-item"><a href="/exhibitions">Current</a></li>
      <li class="list-inline-item"><strong>Past</strong></a></li>
      <li class="list-inline-item"><a href="/exhibitions/upcoming">Upcoming</a></li>
    </ul>

    <?php
    function pageYear($p) {
      return $p->date('Y', 'start'); // year, e.g. "2016"
    }

    $exhibitions = page('exhibitions')->children()->visible()->flip()->filter(function($child) {

      if (kirby()->request()->params()->year()) {
        $year = kirby()->request()->params()->year();
      } else {
        $year = date("Y");
      };

      return $child->date('Y', 'start') == $year && $child->date(null, 'start') < time();
    });
    ?>

    <h3 class="heading-small m-b-2"><?php

    if (kirby()->request()->params()->year()) {
      $year = kirby()->request()->params()->year();
    } else {
      $year = date("Y");
    };

    echo $year ?></h3>
      <ul class="list-unstyled">
      <?php foreach ($exhibitions as $post): ?>
        <li class="p-b-1">
          <a href="<?php echo $post->url() ?>">
            <?php snippet('exhibition-title', $data = array('exhibition' => $post)) ?><br>
            <small class="date">
              <?php echo $post->date('d F Y', 'start') ?> - <?php echo $post->date('d F Y', 'end') ?>
            </small>
          </a>
        </li>
      <?php endforeach; ?>
      </ul>

    <ul class="list-inline">
      <?php foreach(page('exhibitions')->children()->visible()->flip()->group('pageYear') as $year => $yearList): ?>
        <li class="list-inline-item <?php if($year == kirby()->request()->params()->year()): echo "font-weight-bold"; endif; ?>"><a href="/exhibitions/past/year:<?php echo $year ?>"><?php echo $year ?></a></li>
      <?php endforeach; ?>
    </ul>

  </section>
  <section class="col-md-6">
  </section>
</div>

<?php snippet('footer') ?>
