<?php
/**
* @package   Template Overrides YOOtheme
* @version   1.5.8 2009-11-30 14:31:42
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) 2007 - 2009 YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<div class="joomla <?php echo $this->params->get('pageclass_sfx')?>">
	
	<div class="user">

		<h1 class="pagetitle">
			<?php echo JText::_('Reset your Password'); ?>
		</h1>
		
		<p>
			<?php echo JText::_('RESET_PASSWORD_COMPLETE_DESCRIPTION'); ?>
		</p>
	
		<form action="<?php echo JRoute::_( 'index.php?option=com_user&task=completereset' ); ?>" method="post" class="josForm form-validate">
		<fieldset>
			<legend><?php echo JText::_('Reset your Password'); ?></legend>
			
			<div>
				<label for="password1"><?php echo JText::_('Password'); ?>:</label>
				<input id="password1" name="password1" type="password" class="required validate-password" />
			</div>
			<div>
				<label for="password2"><?php echo JText::_('Verify Password'); ?>:</label>
				<input id="password2" name="password2" type="password" class="required validate-password" />
			</div>
			<div>
				<button type="submit"><?php echo JText::_('Submit'); ?></button>
			</div>
			
		</fieldset>
		<?php echo JHTML::_( 'form.token' ); ?>
		</form>
		
	</div>
</div>