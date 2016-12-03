<?php snippet('header') ?>

<div class="row">
  <section class="col-md-6">
    <h3 class="heading-small">Exhibitions</h3>
    <ul class="list-unstyled list-inline">
      <li class="list-inline-item"><a href="/exhibitions">Current</a></li>
      <li class="list-inline-item"><a href="/exhibitions/past">Past</a></li>
      <li class="list-inline-item"><strong>Upcoming</strong></li>
    </ul>

    <h3 class="heading-small m-b-2">Upcoming</h3>
    <ul class="list-unstyled">
      <?php foreach ($pages->find('exhibitions')->upcoming()->toStructure() as $p): ?>
        <li class="p-b-1">
          <?php if ($p->link()->isNotEmpty()): ?><a href="<?php echo $p->link() ?>"><?php endif; ?><?php echo $p->title() ?><?php if ($p->link()->isNotEmpty()): ?></a><?php endif; ?><br>
          <small class="date"><?php echo $p->date('d F Y', 'start') ?> - <?php echo $p->date('d F Y', 'end') ?></small>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
</div>

<?php snippet('footer') ?>
