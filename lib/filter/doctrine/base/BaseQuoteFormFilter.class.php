<?php

/**
 * Quote filter form base class.
 *
 * @package    quotes
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseQuoteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'on_dit'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'on_dit_pas' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'auteur'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mail'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'valide'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'on_dit'     => new sfValidatorPass(array('required' => false)),
      'on_dit_pas' => new sfValidatorPass(array('required' => false)),
      'auteur'     => new sfValidatorPass(array('required' => false)),
      'mail'       => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'valide'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('quote_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quote';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'on_dit'     => 'Text',
      'on_dit_pas' => 'Text',
      'auteur'     => 'Text',
      'mail'       => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
      'valide'     => 'Boolean',
    );
  }
}
