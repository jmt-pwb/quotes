<a href="http://<?php echo $_SERVER['SERVER_NAME']?>/jmt/web/frontend_dev.php">Retour au site</a>
<?php echo link_to('Gestion des blagues', '@homepage') ?>&nbsp;
<?php echo link_to('Gestion des utilisateurs', '@sf_guard_user') ?>&nbsp;
<?php if(!$sf_user->isAuthenticated()): ?>
<?php echo link_to('Deconnexion', '@sf_guard_signout')?>
<?php endif?>