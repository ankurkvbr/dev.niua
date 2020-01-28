<div class="container">
  <div class="row">
      <i class="glyphicon glyphicon-user"></i><div class="col-xs-12 col-md-6"><?php print drupal_render($form['submitted']['name']); ?></div>
        <div class="col-xs-12 col-md-6"><?php print drupal_render($form['submitted']['e_mail_id']); ?></div></div>

  </div>



<div class="row form-group">
  <div class="col-xs-12"><?php print drupal_render($form['submitted']['message']); ?></div>
</div>

<?php// Print out the main part of the form.// Feel free to break this up and move the pieces within the array.
print drupal_render($form['submitted']);

  // Always print out the entire $form. This renders the remaining pieces of the// form that haven't yet been rendered above (buttons, hidden elements, etc).
print drupal_render_children($form);
