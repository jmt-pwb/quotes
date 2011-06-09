<?php

class validatorAntiSpam extends sfValidatorBase
{
  protected function configure($options = array(), $messages = array())
  {
  	$this->mots_interdits = array('casino','viagra','saiks','prem\'s','$$$');
  	 
    parent::configure($options, $messages);

  }
  protected function doClean($value)
  {
  	foreach ($this->mots_interdits as $mot_interdit)
  	{
    	$value = str_ireplace($mot_interdit,'*mot interdit*',$value);
  	}
  	
  	return $value;
  }
}
