
<div class="mb-3">
<?php if(getSession('errors')): ?>
<?php foreach(getSession('errors') as $error): ?>
  <div class="alert alert-danger p-1 text-center"><?php echo $error; ?></div>

<?php endforeach; ?>
<?php removeSession("errors"); ?>
</div>  
<?php endif; ?>

  <?php if(getSession('success')): ?>
    <div class="mb-3">
  <div class="alert alert-success p-1 text-center"><?php echo getSession('success'); ?></div>

</div>
<?php removeSession("success"); ?> 
<?php endif; ?>