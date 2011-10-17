<?php
defined('KOOWA') or die;

class ComCalendarViewHtml extends ComDefaultViewHtml {
	
	public function __construct(KConfig $config) {
		parent::__construct($config);
		
		$this->views = array(
			'sponsors'		=> JText::_('Sponsors'),
			'days'			=> JText::_('Days'),
			//'transactions'	=> JText::_('Transactions'),
			//'users'			=> JText::_('Create User'),
			//'orders'		=> JText::_('Orders')
		);
	
	}


	public function display() {
		$name 	= $this->getName();
		$plural = KInflector::pluralize($name);
		
		if ($name == $plural) {
			KFactory::get('admin::com.calendar.toolbar.'.$name)
				->setTitle('Calendar: <small>'.ucfirst($name).'</small>')
				->append('divider')
				->append('publish')
				->append('unpublish')
				->append('divider')
				->append('preferences')
				->append('resize');
		}	
	
		return parent::display();
	}

}