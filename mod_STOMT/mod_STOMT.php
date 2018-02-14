<?php
/*------------------------------------------------------------------------
# mod_sp_simple_youtube - Youtube Module by JoomShaper.com
# ------------------------------------------------------------------------
# author    JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2014 JoomShaper.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomshaper.com
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die('Restricted access');
//Parameters
$doc 					= JFactory::getDocument();
$uniqid 				= $module->id;
$stomt_id				= $params->get ('stomt_id');
$stomt_label			= $params->get ('stomt_label');
$stomt_color_text		= $params->get ('color_text');
$responsive				= $params->get('responsive', 1);
$showclose				= $params->get('showclose', 1);


// Load the method jquery script.
if( $responsive )
{
	JHtml::_('jquery.framework');
	?>
	
	<?php
}

require(JModuleHelper::getLayoutPath('mod_stomt'));