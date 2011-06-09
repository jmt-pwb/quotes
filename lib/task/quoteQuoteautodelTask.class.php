<?php

class quoteQuoteautodelTask extends sfBaseTask
{
  protected function configure()
  {
    // // add your own arguments here
    $this->addArguments(array(
      new sfCommandArgument('hours', sfCommandArgument::REQUIRED, 'Age en heures au dessus duquel on supprime les commentaires non validés'),
    ));

    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'doctrine'),
      // add your own options here
    ));

    $this->namespace        = 'quote';
    $this->name             = 'quote-auto-del';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [quote:quote-auto-del|INFO] task does things.
Call it with:

  [php symfony quote:quote-auto-del|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    // initialize the database connection
    $databaseManager = new sfDatabaseManager($this->configuration);
    $connection = $databaseManager->getDatabase($options['connection'])->getConnection();
    
    if($arguments['hours']==='0' || (int)$arguments['hours']!=0)
    {
      Doctrine_Core::getTable('Quote')->deleteOld((int)$arguments['hours']);
    }
    else 
    {
      $this->log('Vous devez fournir un nombre d\'heures à garder en paramètre');
    }
    // add your code here
  }
}
