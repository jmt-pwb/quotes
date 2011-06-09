<?php

/**
 * Quote form.
 *
 * @package    quotes
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class QuoteForm extends BaseQuoteForm
{
  
  
  public function configure()
  {
    if(!($this->getOption('dispatcher') instanceof sfEventDispatcher))
    {
      throw new sfException('Il manque l\'option dispatcher');
    }
    
    $this->validatorSchema['mail'] = new sfValidatorAnd(array(
      $this->validatorSchema['mail'],
      new sfValidatorEmail(),
    ));  	
  	
    $this->widgetSchema->moveField('on_dit', sfWidgetFormSchema::AFTER, 'on_dit_pas');
    
    $this->widgetSchema->setLabels(array(
      'on_dit'    => 'Mais',
      'auteur'      => 'L\'auteur',
      'mail'   => 'Email',
    ));
    
  	unset($this['created_at'],$this['updated_at'],$this['valide']);
  	
  	
  }
  
  public function save($con = null)
  {
  	$object = parent::save($con);
  	
  	$sujet = 'Merci d\'avoir posté';
  	$message = 'Coucou, valide moi ton message';
  	
  	$this->getOption('dispatcher')->notify(new sfEvent($object->getMail(), 'mail.send_mail', array('body' => $message, 'sujet' => $sujet)));
  	
  	return $object;
  }
}
