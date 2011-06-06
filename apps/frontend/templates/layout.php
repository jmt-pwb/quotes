<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
  <div>
  	<?php include_partial('global/menu') ?>
  </div>
    <div style="float:left; width:600px; border: 1px solid red">
  		<?php echo $sf_content ?>
  	</div>
  	<div style="float:left; width:200px; border: 1px solid red">
  	<?php include_component('quote', 'quote')?>
  	</div>
  </body>
</html>
