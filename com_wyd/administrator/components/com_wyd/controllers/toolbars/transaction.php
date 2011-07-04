<?

class ComWYDControllerToolbarTransaction extends ComDefaultControllerToolbarDefault
{
	
	public function getCommands()
	{
		$this
			->reset()
			->addCancel();
			
		return parent::getCommands();
	}
}