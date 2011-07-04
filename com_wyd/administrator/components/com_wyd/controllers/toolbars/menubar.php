<?

class ComWYDControllerToolbarMenubar extends ComDefaultControllerToolbarMenubar
{
	
	public function getCommands()
	{
		
		$name = $this->getController()->getIdentifier()->name;
		
		$this->addCommand('Overview', array(
			'href'	=> 'index.php?option=com_wyd&view=dashboard',
			'active'	=> ($name == 'dashboard'),
		));
		
		$this->addCommand('Days', array(
			'href'	=> 'index.php?option=com_wyd&view=days',
			'active'	=> ($name == 'day'),
		));
		
		$this->addCommand('Sponsorships', array(
			'href'	=> 'index.php?option=com_wyd&view=sponsorships',
			'active'	=> ($name == 'sponsorship'),
		));
		
		$this->addCommand('Transactions', array(
			'href'	=> 'index.php?option=com_wyd&view=transactions',
			'active'	=> ($name == 'transaction'),
		));
		
		$this->addCommand('Reports', array(
			'href'	=> 'index.php?option=com_wyd&view=reports',
			'active'	=> ($name == 'report'),
		));
		
		return parent::getCommands();
	}
}