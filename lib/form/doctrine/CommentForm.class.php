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
    $this->validatorSchema['mail'] = new sfValidatorAnd(array(
    $this->validatorSchema['mail'],
      new sfValidatorEmail(),
    ));  	
  	
    $this->widgetSchema->moveField('contenu', sfWidgetFormSchema::AFTER, 'mail');
    
    $this->widgetSchema->setLabels(array(
      'mail'   => 'Email',
    ));
    
  	unset($this['created_at'],$this['updated_at'],$this['valide']);
  }
}
