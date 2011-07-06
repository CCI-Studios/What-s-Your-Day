<?

class ComWYDDatabaseRowTransaction extends ComCciDatabaseRowRelated
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'has_many' => array(
				array('name'=>'days')
			)
		));
		
		parent::_initialize($config);
	}
	
}