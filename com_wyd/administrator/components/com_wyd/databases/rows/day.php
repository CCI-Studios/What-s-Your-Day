<?

class ComWYDDatabaseRowDay extends ComCciDatabaseRowRelated
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
	}
	
	public function _initialize(KConfig $config)
	{
		$config->append(array(
			'belongs_to' => array(
				array('name'=>'transaction')
			),
		));
		
		parent::_initialize($config);
	}
	
	
}