<?

class ComWYDControllerToolbarDays extends ComDefaultControllerToolbarDefault
{
	
	public function getCommands()
	{
		$this
			->addSeparator()
			->addEnable()
			->addDisable()
			->addSeparator()
			->addModal(array(
				'href'	=> JRoute::_('index.php?option=com_config&controller=component&component=com_wyd'),
				'icon'	=> 'icon-32-config',
				'label'	=> 'Parameters',
			));
			
		return parent::getCommands();
	}
}
