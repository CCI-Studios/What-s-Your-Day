<? 

class ComWYDModelDays extends KModelDatabase
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->insert('ids', 'raw');
	}
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;
		
		if (isset($state->ids)) {
			$query->where('tbl.id', 'IN', '('.$state->ids .')');
		}
		
		parent::_buildQueryWhere($query);
		echo $query;
		die;
	}
	
}

