<?php snippet('header') ?>
<div class="row">
  <h1 class="col-xs-12"><?php echo $page->title() ?></h1>
</div>
<div class="row m-t-1">

  <form action="<?php echo $page->url() ?>" method="POST">
      <label>Email</label>
      <input<?php if ($form->error('email')): ?> class="error"<?php endif; ?> name="email" type="email" value="<?php echo $form->old('email') ?>">

      <label>Name</label>
      <input<?php if ($form->error('name')): ?> class="error"<?php endif; ?> name="name" type="text" value="<?php echo $form->old('name') ?>">

      <label>Message</label>
      <textarea<?php if ($form->error('message')): ?> class="error"<?php endif; ?> name="message"><?php echo $form->old('message') ?></textarea>

      <?php echo csrf_field() ?>
      <?php echo honeypot_field() ?>
      <input type="submit" value="Submit">
  </form>
  <?php if ($form->success()): ?>
      Thank you for your message. We will get back to you soon!
  <?php else: ?>
      <?php snippet('uniform/errors', ['form' => $form]) ?>
  <?php endif; ?>


</div>
<section class="row back m-t-3">
  <a class="col-xs-12" href="/contact"><i class="fa fa-chevron-left" aria-hidden="true"></i> Contact</a>
</section>

<?php snippet('footer') ?>
