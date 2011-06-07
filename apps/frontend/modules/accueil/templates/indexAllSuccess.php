<?php foreach($quotes as $quote): ?>
  <?php include_partial('quote/quote',array('date' => $quote->getCreatedAt(),'auteur' => $quote->getAuteur(),'on_dit' => $quote->getOnDit(),'on_dit_pas' => $quote->getOnDitPas())) ?>
  <hr/>
<?php endforeach ?>
<?php  echo pager_navigation($pager, '@all_quotes') ?>