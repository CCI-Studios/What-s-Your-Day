<?php
defined('KOOWA') or die;

class ComCalendarViewDayHtml extends ComDefaultViewHtml {

	public function display() {
		$this->_auto_assign = false;
		
		$date = KRequest::get('get.date', 'string', null);
		
		if (!$date) {
			$date = date('Y-m-d');
		}
		
		$today = KFactory::get('site::com.calendar.model.days')
					->set('date', $date)
					->limit(1)
					->getList()->current();

		$this->assign('today', $today);
		return parent::display();
	}
}