<?php
defined('_JEXEC') or die;
if (!defined('KOOWA')) {
	JError::raiseWarning(500, "Please install the Nooku (Koowa) plugin");
	return;
}

KFactory::get('site::com.calendar.dispatcher')
	->dispatch(KRequest::get('get.view', 'cmd', 'sponsor'));