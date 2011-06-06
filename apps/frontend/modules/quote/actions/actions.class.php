<?php

/**
 * quote actions.
 *
 * @package    quotes
 * @subpackage quote
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class quoteActions extends sfActions
{

  
  public function executeNew(sfWebRequest $request)	
  {
  	
     $this->form = new QuoteForm();
     if($request->getMethod()==sfWebRequest::POST)
     {
		$this->form->bind($request->getParameter($this->form->getName()));
		if($this->form->isValid())
		{
			$this->form->save();
			$this->redirect('@confirm_create');
		}
     }
     
  }
  
  public function executeConfirmCreate(sfWebRequest $request)	
  {
  	
  }
}
