<?php foreach($quotes as $quote): ?>
  <?php include_partial('quote/quote',array('date' => $quote->getCreatedAt(),'auteur' => $quote->getAuteur(),'on_dit' => $quote->getOnDit(),'on_dit_pas' => $quote->getOnDitPas(),'id' => $quote->getId(),'activer_lien_commentaire' => $activer_lien_commentaire)) ?>
  <hr/>
<?php endforeach ?>
<?php  echo pager_navigation($quotes, '@all_quotes') ?>