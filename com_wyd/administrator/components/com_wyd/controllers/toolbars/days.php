<?

class ComWYDControllerToolbarDays extends ComDefaultControllerToolbarDefault
{
	
	public function getCommands()
	{
		$this
			->addSeparator()
			->addEnable()
			->addDisable();
			
		return parent::getCommands();
	}
}
