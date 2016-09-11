<?php snippet('header') ?>

<div class="row">
  <section class="col-md-4">
    <h3 class="heading-small m-b-2 font-weight-bold">Recent News</h3>
    <h3 class="heading-small m-b-2">Filter by Artist</h3>
    <ul class="list-unstyled">
      <?php foreach($pages->find('artists')->children() as $page): ?>
        <?php if ($page->find('news')->documents()->count() > 0): ?>
          <li><a href="#"><?php echo $page->first_name() . " " . $page->last_name() ?></a></li>
        <?php endif; ?>
      <?php endforeach ?>
    </ul>
  </section>
  <section class="col-md-8">
    <ul class="list-unstyled">
      <?php foreach($pages->find('artists')->children() as $page): ?>
        <?php foreach($page->find('news')->documents()->flip() as $p): ?>
          <li><a href="<?php echo $p->url() ?>"><?php if ($p->title()->isNotEmpty()): ?><?php echo $p->title()->html() ?><?php else: ?><?php echo $p->filename() ?><?php endif; ?></a></li>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </ul>
  </section>
</div>

<?php snippet('footer') ?>
