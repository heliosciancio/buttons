<?php
/**
 * @version		3.5.11 components/com_buttons/layouts/toolbar.php
 * 
 * @package		Buttons
 * @subpackage	com_buttons
 * @since		3.4
 *
 * @author		Helios Ciancio <info@eshiol.it>
 * @link		http://www.eshiol.it
 * @copyright	Copyright (C) 2015, 2017 Helios Ciancio. All Rights Reserved
 * @license		http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL v3
 * Buttons is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
 
// no direct access
defined('_JEXEC') or die('Restricted access.');

JHtml::_('behavior.framework');
JHtml::_('jquery.framework');
JFactory::getDocument()->addScript(rtrim(JURI::base(true), '/') . '/'.'media/com_buttons/js/ajax.js');

foreach($displayData->buttons as $id => $item)
{
	echo '<a href="index.php?option=com_buttons'
			.'&task=button.click'
			.'&format=json'
			.'&asset_id='.$displayData->asset_id
			.'&catid='.$displayData->catid
			.'&id='.$id
			.'"'
		.' class="button-'.$id.' com_buttons'.$displayData->toolbar_final.$item->value.'" title="'.$item->title.'"></a>';
}
