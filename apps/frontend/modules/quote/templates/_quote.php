<div>
	Le <?php echo $date?> par <?php echo $auteur?>
	<div>
		On ne dit pas <?php echo $on_dit_pas?>
	</div>
	<div>
		Mais <?php echo $on_dit?>
	</div>
	<?php if(isset($activer_lien_commentaire)):?>
		<div style='float:right'><?php echo link_to('Commentaires','quote/show?id='.$id)?></div>
	<?php endif?>
</div>
