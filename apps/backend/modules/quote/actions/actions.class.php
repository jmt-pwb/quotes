<?php

require_once dirname(__FILE__).'/../lib/quoteGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/quoteGeneratorHelper.class.php';

/**
 * quote actions.
 *
 * @package    quotes
 * @subpackage quote
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class quoteActions extends autoQuoteActions
{
	public function preExecute()
	{
		parent::preExecute();
		if(in_array($this->getActionName(),array('new','create')))
		{
			$this->forward404();
		}
	}
	
	public function executeBatchValidate(sfWebRequest $request)
	{
      $ids = $request->getParameter('ids');

      $this->validate($ids);
	}
	
	public function executeListValidate(sfWebRequest $request)
	{
      $id = $request->getParameter('id');
      
      if($id)
      { 
      	$this->validate(array($id));
      }

      $this->redirect('@quote');
	}
	
	protected function validate(array $id)
	{
		Doctrine_core::getTable('Quote')->validate($id);
		$this->getUser()->setFlash('notice', 'The item(s) was validated successfully.');	
	}
	
	
}
