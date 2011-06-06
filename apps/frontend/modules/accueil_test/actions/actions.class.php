<?php

/**
 * accueil_test actions.
 *
 * @package    quotes
 * @subpackage accueil_test
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class accueil_testActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->quotes = Doctrine_Core::getTable('Quote')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new QuoteForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new QuoteForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($quote = Doctrine_Core::getTable('Quote')->find(array($request->getParameter('id'))), sprintf('Object quote does not exist (%s).', $request->getParameter('id')));
    $this->form = new QuoteForm($quote);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($quote = Doctrine_Core::getTable('Quote')->find(array($request->getParameter('id'))), sprintf('Object quote does not exist (%s).', $request->getParameter('id')));
    $this->form = new QuoteForm($quote);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($quote = Doctrine_Core::getTable('Quote')->find(array($request->getParameter('id'))), sprintf('Object quote does not exist (%s).', $request->getParameter('id')));
    $quote->delete();

    $this->redirect('accueil_test/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $quote = $form->save();

      $this->redirect('accueil_test/edit?id='.$quote->getId());
    }
  }
}
