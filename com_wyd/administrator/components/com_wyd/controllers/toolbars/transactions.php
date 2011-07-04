<?

class ComWYDControllerToolbarTransactions extends ComDefaultControllerToolbarDefault
{
	
	public function getCommands()
	{
		$this
			->reset();
			
		return parent::getCommands();
	}
}