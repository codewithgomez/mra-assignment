<main class="form-signin">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tax Payer Data Management System</h1>
 </div>
<?php $form = \app\core\form\Form::begin('','', 'post'); ?>
  <?php echo $form->field($model,"Email", 'email'); ?>
  <?php echo $form->field($model,"Password", 'password'); ?>
  <button  class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
<?php echo \app\core\form\Form::end(); ?>
</main>