<?php

/**
 * Comment form.
 *
 * @package    quotes
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CommentForm extends BaseCommentForm
{
  public function configure()
  {
  	if(!$this->getOption('quote_id'))
  	{
  		throw new sfException('CommentForm doit avoir l\'option quote_id');
  	}
  	
    $this->validatorSchema['mail'] = new sfValidatorAnd(array(
    $this->validatorSchema['mail'],
      new sfValidatorEmail(),
    ));  	
  	
    $this->widgetSchema->moveField('contenu', sfWidgetFormSchema::AFTER, 'mail');
    
    $this->widgetSchema->setLabels(array(
      'mail'   => 'Email',
    ));
    
    $this->getObject()->setQuoteId($this->getOption('quote_id'));
    
  	unset($this['created_at'],$this['updated_at'],$this['valide'], $this['quote_id']);
  }
}
