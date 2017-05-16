  </main>
  <footer class="container m-t-3">
    <div class="row">
      <section class="col-md-11">
        <p class="d-inline m-r-1">&copy; <?php echo date("Y"); ?></p>
        <p class="d-inline text-uppercase logo m-r-1"><span class="logo-susan-inglett">Susan Inglett</span> <span class="logo-gallery">Gallery</span></p>
        <p class="d-inline m-r-1"><a href="<?php echo $pages->find('about')->map_link()->html() ?>"> <?php echo $pages->find('about')->address_one()->html() ?> <?php echo $pages->find('about')->address_two()->html() ?></a></p>
        <p class="d-inline m-r-1"><?php echo $pages->find('about')->phone()->html() ?></p>
        <p class="d-inline"><a href="mailto:<?php echo $pages->find('about')->email()->html() ?>"><?php echo $pages->find('about')->email()->html() ?></a></p>
      </section>
      <section class="social-media col-md-1">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="<?php echo $pages->find('about')->instagram()->html() ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li class="list-inline-item"><a href="<?php echo $pages->find('about')->facebook()->html() ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="list-inline-item"><a href="<?php echo $pages->find('about')->twitter()->html() ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
      </section>
    </div>
  </footer>
  <script data-no-instant src="http://code.jquery.com/jquery-3.1.0.js"></script>
  <script data-no-instant src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
  <script data-no-instant src="https://use.fontawesome.com/5450ef4433.js"></script>
  <script data-no-instant src="//cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script>
  <script data-no-instant src="//cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>
  <script src="/assets/js/photoswipe.js"></script>
  <script data-no-instant src="//cdnjs.cloudflare.com/ajax/libs/instantclick/3.0.1/instantclick.min.js"></script>
  <script data-no-instant type="text/javascript">
    InstantClick.init('mousedown');
  </script>
</body>
</html>
