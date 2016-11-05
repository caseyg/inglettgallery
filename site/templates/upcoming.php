<?php snippet('header') ?>

<?php $upcoming = page('exhibitions')
          ->children()
          ->visible()
          ->filter(function($child) {
            return $child->date(null, 'start') > time() || $child->date(null, 'end') > time();
          });?>

<div class="row">
  <section class="col-md-6">
    <h3 class="heading-small">Exhibitions</h3>
    <ul class="list-unstyled list-inline">
      <li class="list-inline-item"><a href="/exhibitions">Current</a></li>
      <li class="list-inline-item"><a href="/exhibitions/past">Past</a></li>
      <li class="list-inline-item"><strong>Upcoming</strong></li>
    </ul>

    <h3 class="heading-small m-b-2">Upcoming</h3>

    <?php foreach ($upcoming as $p): ?>
      <?php echo $p->title() ?><br>
      <small class="date"><?php echo $p->date('d F Y', 'start') ?> - <?php echo $p->date('d F Y', 'end') ?></small>
    <?php endforeach; ?>

  </section>
</div>

<?php snippet('footer') ?>
