<?php snippet('header') ?>
<div class="row">
  <h1 class="col-xs-12"><?php echo $page->title() ?></h1>
</div>
<div class="row m-t-1">

  <?php if ($form->success()): ?>
      <div class="alert alert-success">Thank you for signing up!</div>
  <?php else: ?>
      <?php snippet('uniform/errors', ['form' => $form]) ?>
  <?php endif; ?>

  <form class="col-md-6" action="<?php echo $page->url()?>#form" method="post">

    <fieldset class="form-group">
      <legend>Name</legend>
      <div class="form-group row">
        <div class="col-xs-6 <?php e($form->error('first_name'), ' has-danger')?>">
          <label for="first_name">First Name</label>
          <input class="form-control" type="text" name="first_name" id="first_name" required>
        </div>
        <div class="col-xs-6 <?php e($form->error('last_name'), ' has-danger')?>">
          <label for="last_name">Last Name</label>
          <input class="form-control" type="text" name="last_name" id="last_name" required>
        </div>
      </div>
    </fieldset>

    <fieldset class="form-group">
      <legend>Address</legend>

      <div class="form-group <?php e($form->error('address_1'), ' has-danger')?>">
        <label for="address_1">Address 1</label>
        <input class="form-control" type="text" name="address_1" id="address_1" required>
      </div>
      <div class="form-group <?php e($form->error('address_2'), ' has-danger')?>">
        <label for="address_2">Address 2</label>
        <input class="form-control" type="text" name="address_2" id="address_2">
      </div>

      <div class="form-group row">
        <div class="col-xs-8 <?php e($form->error('city'), ' has-danger')?>">
          <label for="city">City</label>
          <input class="form-control" type="text" name="city" id="city" required>
        </div>
        <div class="col-xs-4 <?php e($form->error('state'), ' has-danger')?>">
          <label for="state">State/Province</label>
          <input class="form-control" type="text" name="state" id="state" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-xs-4 <?php e($form->error('zip_code'), ' has-danger')?>">
          <label for="zip_code">Zip/Postal Code</label>
          <input class="form-control" type="text" name="zip_code" id="zip_code" required>
        </div>
      <div class="form-group">

    </fieldset>

    <fieldset class="form-group">
      <legend>Email</legend>
      <div class="form-group <?php e($form->error('email'), ' has-danger')?>">
        <label for="email">Email</label>
        <input class="form-control" type="email" value="<?php $form->echoValue('_from') ?>" name="_from" id="email" required>
      </div>
    </fieldset>

    <fieldset class="form-group">
      <legend>Phone</legend>
      <div class="form-group <?php e($form->error('telephone'), ' has-danger')?>">
        <label for="telephone">Telephone</label>
        <input class="form-control" type="tel" placeholder="1-(555)-555-5555" name="telephone" id="telephone" required>
      </div>
    </fieldset>

    <fieldset class="form-group <?php e($form->error('checkbox'), ' has-danger')?>">
      <legend>Check all that apply</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="art_enthusiast" id="art_enthusiast" <?php e($form->value('art_enthusiast'), ' checked')?>>
          Art Enthusiast
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="artist" id="artist" <?php e($form->value('artist'), ' checked')?>>
          Artist
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="collector" id="collector" <?php e($form->value('collector'), ' checked')?>>
          Collector
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="curator" id="curator" <?php e($form->value('curator'), ' checked')?>>
          Curator
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="dealer" id="dealer" <?php e($form->value('dealer'), ' checked')?>>
          Dealer
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="press" id="press" <?php e($form->value('press'), ' checked')?>>
          Press
        </label>
      </div>
    </fieldset>

    <?php echo csrf_field() ?>
    <input type="submit" class="btn btn-primary btn-secondary" value="Submit">
  </form>

</div>
<section class="row back m-t-3">
  <a class="col-xs-12" href="/contact"><i class="fa fa-chevron-left" aria-hidden="true"></i> Contact</a>
</section>

<?php snippet('footer') ?>
