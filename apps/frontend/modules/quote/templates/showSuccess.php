<?php include_partial('quote/quote',array('date' => $quote->getCreatedAt(),'auteur' => $quote->getAuteur(),'on_dit' => $quote->getOnDit(),'on_dit_pas' => $quote->getOnDitPas(),'id' => $quote->getId())) ?>
<?php include_partial('formComment', array('form' => $form)) ?>
