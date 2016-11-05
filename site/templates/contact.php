<?php snippet('header') ?>

<div class="row">

  <?php
  $represented = $page->children()->filterBy('Status', 'represented');
  $exhibited = $page->children()->filterBy('Status', 'exhibited');
  ?>

  <section class="col-md-4">
    <h3 class="heading-small m-b-2"><?php echo $page->title()->html() ?></h3>

    <p><?php echo $site->title()->html() ?><br>
    <?php echo $page->address_one()->html() ?><br>
    <?php echo $page->address_two()->html() ?><br>
    <?php echo $page->phone()->html() ?><br>
    <?php echo $page->fax()->html() ?> fax<br>
    <a href="mailto:<?php echo $pages->find('contact')->email()->html() ?>"><?php echo $pages->find('contact')->email()->html() ?></a></p>

    <p class="m-t-1 d-inline-block"><?php echo $page->hours()->kt() ?></p>

    <p>
      <a href="<?php echo $page->map_link() ?>" class="d-inline-block m-b-1 m-t-2"><i class="fa fa-map-pin" aria-hidden="true"></i> View Map</a><br>
      <a href="/mailing-list"><i class="fa fa-envelope-o" aria-hidden="true"></i> Join Our Mailing List</a>
    </p>
  </section>

  <div class="col-md-8">
    <h3 class="heading-small m-b-2">About</h3>
    <?php echo $page->about()->kt() ?>
  </div>

</div>

<?php snippet('footer') ?>
