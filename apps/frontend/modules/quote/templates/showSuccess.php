<div><?php include_partial('quote/quote',array('date' => $quote->getCreatedAt(),'auteur' => $quote->getAuteur(),'on_dit' => $quote->getOnDit(),'on_dit_pas' => $quote->getOnDitPas(),'id' => $quote->getId())) ?></div>
<div>
<br/>
<?php foreach($comments as $comment):?>
<div><?php include_partial('quote/comment', array('date' => $comment->getCreatedAt(),'auteur' => $comment->getAuteur(),'contenu' => $comment->getContenu())) ?></div>
<?php endforeach?>
<div style="float:right">
	<?php include_partial('formComment', array('form' => $form,'id'=>$id)) ?>
	<br/>
	<?php if ($sf_user->hasFlash('notice')): ?>
  		<?php echo $sf_user->getFlash('notice') ?>
	<?php endif; ?>
</div>
</div>
