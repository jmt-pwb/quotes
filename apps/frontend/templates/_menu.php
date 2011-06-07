<?php echo link_to('Home', '@homepage') ?>&nbsp;
<?php echo link_to('Les blagues', '@all_quotes') ?>&nbsp;
<?php echo link_to('Proposer une blague', '@proposition') ?>&nbsp;
<?php if(!$sf_user->isAuthenticated()): ?>
<?php echo link_to('Connexion', '@sf_guard_signin')?>
<?php else: ?>
<?php if($sf_user->isSuperAdmin()):?>
<a href="http://<?php echo $_SERVER['SERVER_NAME']?>/jmt/web/backend_dev.php">Adminstration</a>
<?php endif?>
<?php echo link_to('Deconnexion', '@sf_guard_signout')?>
<?php endif?>