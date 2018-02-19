<?php
/*------------------------------------------------------------------------
# stomt.php - stomt - A Screenshot paints a thousand words
# ------------------------------------------------------------------------
# author    Stomt GmbH
# copyright Copyright (C) 2018 stomt.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.stomt.com
# Technical Support:  Forum - contact@stomt.com
-------------------------------------------------------------------------*/
// no direct access
defined('JPATH_BASE') or die( 'Restricted access' ); 
 
/**
 * Example system plugin
 */
class plgSystemStomt extends JPlugin
{
	function onBeforeRender() {
		if ( JFactory::getApplication()->isSite()) {
			$document = JFactory::getDocument();
			$stomt_id				= $this->params->get ('stomt_id');
			$stomt_label			= $this->params->get ('stomt_label');
			$stomt_color_text		= $this->params->get ('color_text');
			$stomt_color_backg		= $this->params->get ('color_background');
			$stomt_color_hover		= $this->params->get ('color_hover');
			$position				= $this->params->get('position','right');
			$showclose				= $this->params->get('showclose',0);
			$preload				= $this->params->get('preload',0);
			if ($stomt_id) {?>
			<script>
			var preload = <?php echo ($preload==0?'false':'true'); ?>;
			var showclose = <?php echo ($showclose==0?'false':'true'); ?>;
				
				var options = {
			  appId: '<?php echo $stomt_id; ?>',
			  position: '<?php echo $position; ?>', 
			  label: '<?php echo $stomt_label; ?>', 
			  showClose: showclose,
			  colorText: '<?php echo $stomt_color_text; ?>', 
			  colorBackground:'<?php echo $stomt_color_backg; ?>',
			  colorHover:'<?php echo $stomt_color_hover; ?>',
			  preload:preload
			};


			  // Include the STOMT JavaScript SDK
			  (function(w, d, n, r, t, s){
			    w.Stomt = w.Stomt||[];
			    t = d.createElement(n);
			    s = d.getElementsByTagName(n)[0];
			    t.async=1;
			    t.src=r;
			    s.parentNode.insertBefore(t,s);
			  })(window, document, 'script', 'https://www.stomt.com/widget.js');
			  
			  // Adjust the 'APP_ID' to your application id 
			  // you can find it here: https://www.stomt.com/YOUR_PAGE/apps
			  Stomt.push(['addTab', options]);
			  Stomt.push(['addFeed', options]);
			  Stomt.push(['addCreate', options]);
				 
				
			</script>
			<?php

			}
		}
	}
}
