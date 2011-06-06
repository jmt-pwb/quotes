<?php

class quoteComponents extends sfComponents { 

	public function executeQuote(sfWebRequest $request)
	{
		$quotes = Doctrine_Core::getTable('Quote')->findValidQuotes()->orderBy('updated_at')
    		->execute(array(),Doctrine_core::HYDRATE_ARRAY);
    	$count_quotes=count($quotes);
    	
    	$num_quotes=rand(0, $count_quotes-1);
    	$this->date=$quotes[$num_quotes]['created_at'];
    	$this->auteur=$quotes[$num_quotes]['auteur'];
    	$this->on_dit=$quotes[$num_quotes]['on_dit'];
    	$this->on_dit_pas=$quotes[$num_quotes]['on_dit_pas'];
    	
    	
	}
}