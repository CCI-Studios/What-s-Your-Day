<?

class ComWYDViewDashboardHtml extends ComDefaultViewHtml
{

	public function display()
	{
		KRequest::set('get.hidemainmenu', 0);
		
		return parent::display();
	}
}