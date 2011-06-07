<?php 

class Doctrine_Template_Validate extends Doctrine_Template
{
	public function setTableDefinition()
	{
		$this->hasColumn('valide','boolean',null,array(
             'type' => 'boolean',
             'default' => 0,
             ));
	}
	
	
	public function findValidQuotesTableProxy()
	{
		return $this->getInvoker()->getTable()->createQuery()->where('valide= ?', 1);
	}
	
	
	public function validateTableProxy(array $ids)
	{
		return $this->getInvoker()->getTable()->createQuery()->update()->whereIn('id', $ids)->set('valide', 1)->execute();
	}
	
}


?>