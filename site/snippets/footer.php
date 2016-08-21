  </main>
  <footer class="container m-t-3">
    <div class="row">
      <section class="col-md-11">
        <p class="d-inline m-r-1">&copy; <?php echo date("Y"); ?></p>
        <p class="d-inline text-uppercase logo m-r-1"><span class="logo-susan-inglett">Susan Inglett</span> <span class="logo-gallery">Gallery</span></p>
        <p class="d-inline m-r-1"><a href="<?php echo $pages->find('contact')->map_link()->html() ?>"> <?php echo $pages->find('contact')->address_one()->html() ?> <?php echo $pages->find('contact')->address_two()->html() ?></a></p>
        <p class="d-inline m-r-1"><?php echo $pages->find('contact')->phone()->html() ?></p>
        <p class="d-inline"><a href="mailto:<?php echo $pages->find('contact')->email()->html() ?>"><?php echo $pages->find('contact')->email()->html() ?></a></p>
      </section>
      <section class="social-media col-md-1">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="<?php echo $pages->find('contact')->instagram()->html() ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li class="list-inline-item"><a href="<?php echo $pages->find('contact')->facebook()->html() ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="list-inline-item"><a href="<?php echo $pages->find('contact')->twitter()->html() ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
      </section>
    </div>
  </footer>
  <script data-no-instant src="https://use.fontawesome.com/5450ef4433.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/instantclick/3.0.1/instantclick.min.js" data-no-instant></script>
  <script data-no-instant type="text/javascript">
    InstantClick.init();
  </script>
</body>
</html>
