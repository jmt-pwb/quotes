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
  	
     $this->form = new QuoteForm(null,array('dispatcher' => $this->dispatcher));
     $this->enregistrer_formulaire($request);
  }
  
  public function executeShow(sfWebRequest $request)	
  {
  	// Gestion affichage de la quote
  	$id=$request->getParameter('id');
  	$this->id=$id;
  	
  	$this->quote=Doctrine_Core::getTable('Quote')
  	->findValidQuotes()
  	->addWhere('id = ?', $id)
    ->execute()->getFirst();
    
    if(!$this->quote)
    {
    	$this->redirect404();
    }
        
    // Gestion affichage des commentaires
    $this->comments=Doctrine_Core::getTable('Comment')
    	->findValidQuotes()
    	->addWhere('quote_id = ?', $id)
    	->execute();
    
    // Gestion formulaire de soumission de commentaire
    $auteur_cookie=$request->getCookie('QuoteSite');
    var_dump($auteur_cookie);
    $this->form = new CommentForm(null, array('quote_id' => $id, 'auteur'=>$auteur_cookie));
    $this->enregistrer_formulaire($request);
  }
  
  protected function enregistrer_formulaire(sfWebRequest $request)
  {
    if($request->getMethod()==sfWebRequest::POST)
    {
      $this->form->bind($request->getParameter($this->form->getName()));
      if($this->form->isValid())
      {
        $this->getResponse()->setCookie('QuoteSite', $this->form->getValue('auteur'));
        $this->form->save();
        $this->getUser()->setFlash('notice', 'Ajout enregistré.');
        if($this->getActionName()=='show')
        {
          $this->redirect('quote/show?id='.$request->getParameter('id'));
        }
        elseif($this->getActionName()=='new')
        {
          $this->redirect('quote/new');
        }   
      }
    }
  }
}
