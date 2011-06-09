<?php

/**
 * accueil actions.
 *
 * @package    quotes
 * @subpackage accueil
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class accueilActions extends sfActions
{
	public function preExecute()
	{
		$this->activer_lien_commentaire=true;
	}
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->quotes = $this->findQuotes(10)->execute();
  }
  
  public function executeIndexAll(sfWebRequest $request)
  {
  	$this->pager = new sfDoctrinePager(
      'Quote',
      sfConfig::get('app_max_page')
    );
    $this->pager->setQuery($this->findQuotes(sfConfig::get('app_max_page')));
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
    $this->quotes = $this->pager;
  }
  
  protected function findQuotes($max)
  {
    return Doctrine_Core::getTable('Quote')
    ->findValidQuotes()
    ->orderBy('updated_at')
    ->limit($max);
  }
  
  
}
