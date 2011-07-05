<?

class ComWYDControllerToolbarDashboard extends ComDefaultControllerToolbarDefault
{
	
	public function getCommands()
	{
		$this
			->addModal(array(
				'href'	=> JRoute::_('index.php?option=com_config&controller=component&component=com_wyd'),
				'icon'	=> 'icon-32-config',
				'label'	=> 'Parameters',
			));
		
		return parent::getCommands();
	}
}