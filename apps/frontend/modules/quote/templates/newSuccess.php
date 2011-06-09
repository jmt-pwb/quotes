
<?php include_partial('form', array('form' => $form)) ?>
	<?php if ($sf_user->hasFlash('notice')): ?>
  		<?php echo $sf_user->getFlash('notice') ?>
	<?php endif; ?>
