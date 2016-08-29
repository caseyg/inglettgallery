<?php snippet('header') ?>

<div class="row">
  <section class="col-md-6">
    <h3 class="heading-small m-b-2">Exhibitions</h3>
    <ul class="list-unstyled list-inline text-uppercase">
      <li class="list-inline-item"><a href="/exhibitions">Current</a></li>
      <li class="list-inline-item"><strong>Past</strong></a></li>
      <li class="list-inline-item"><a href="/exhibitions/upcoming">Upcoming</a></li>
    </ul>

    <?php
    function pageYear($p) {
      return $p->date('Y', 'start'); // year, e.g. "2016"
    }
    $posts = page('exhibitions')->children()->visible()->flip();
    ?>

    <ul class="list-inline">
      <?php foreach ($posts->group('pageYear') as $year => $yearList): ?>
        <li class="list-inline-item"><a href="#<?php echo $year ?>"><?php echo $year ?></a></li>
      <?php endforeach; ?>
    </ul>

    <?php foreach ($posts->group('pageYear') as $year => $yearList): ?>
      <h3 class="heading-small m-b-2" id="<?php echo $year ?>"><?php echo $year ?></h3>
        <ul class="list-unstyled">
        <?php foreach ($yearList as $post): ?>
          <li class="p-b-1"><a href="<?php echo $post->url() ?>"><?php echo $post->title() ?><br>
          <small class="date"><?php echo $post->date('d F Y', 'start') ?> - <?php echo $post->date('d F Y', 'end') ?></small></a></li>
        <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>


  </section>
  <section class="col-md-6">
  </section>
</div>

<?php snippet('footer') ?>
