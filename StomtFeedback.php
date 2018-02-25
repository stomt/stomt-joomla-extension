<?php


/*------------------------------------------------------------------------
# stomt.php - STOMT - Easy Feedback
# ------------------------------------------------------------------------
* LICENSE:
 *
 * This library is free software; you can redistribute it
 * and/or modify it under the terms of the GNU Lesser General
 * Public License as published by the Free Software Foundation;
 * either version 2.1 of the License, or (at your option) any
 * later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this library.  If not, see <http://www.gnu.org/licenses/>
 *
# author    STOMT GmbH
# @copyright Copyright (C) 2018 stomt.com. All Rights Reserved.
# @license - https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
# Websites: https://www.stomt.com
# Technical Support: contact@stomt.com
# Documentation: https://github.com/stomt/stomt-joomla-extension/blob/master/README.md

-------------------------------------------------------------------------*/

defined('JPATH_BASE') or die('Restricted access');

class plgSystemStomtFeedback extends JPlugin
{
    public function onBeforeRender() {
        if (JFactory::getApplication()->isSite()) {
            $document = JFactory::getDocument();
            $stomt_id = $this->params->get('stomt_id');
            $stomt_label = $this->params->get('stomt_label');
            $stomt_color_text = $this->params->get('color_text');
            $stomt_color_backg = $this->params->get('color_background');
            $stomt_color_hover = $this->params->get('color_hover');
            $position = $this->params->get('position', 'right');
            $preload = $this->params->get('preload', 0);
?>
<script>
    var options = {
      appId: '<?php echo $stomt_id; ?>',
      position: '<?php echo $position; ?>', 
      label: '<?php echo $stomt_label; ?>',
      colorText: '<?php echo $stomt_color_text; ?>', 
      colorBackground:'<?php echo $stomt_color_backg; ?>',
      colorHover:'<?php echo $stomt_color_hover; ?>',
      preload: <?php echo $preload ? 'true' : 'false'; ?>
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

    // Configure the integration
    Stomt.push(['addTab', options]);
    Stomt.push(['addFeed', options]);
    Stomt.push(['addCreate', options]);
</script>
<?php
        }
    }
}
