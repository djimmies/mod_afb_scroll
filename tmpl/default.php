<?php
/**
 * @package		Dayman Media
 * @subpackage	mod_villa_prijs
 * @copyright	Copyright (C) 2014 Dayman Media, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class= "<?php echo $moduleclass_sfx ?>"> 
<div id="makeMeScrollable">			
	<?php
		foreach($images as $image){
			echo JHtml::_('image', $image->folder.'/'.$image->name, $image->name);
		}
	?>
</div>
</div>
	<!-- Plugin initialization -->
	<script type="text/javascript">
		// Initialize the plugin with no custom options
		$.noConflict();
		jQuery( document ).ready(function( $ ) {
		$(document).ready(function () {
			// None of the options are set
			$("div#makeMeScrollable").smoothDivScroll({
				autoScrollingMode: "onStart",
				manualContinuousScrolling: true,
				touchScrolling: true,
			});
			
		$("#makeMeScrollable").bind("mouseover", function() {
			$(this).smoothDivScroll("stopAutoScrolling");
				}).bind("mouseout", function() {
			$(this).smoothDivScroll("startAutoScrolling");
			});
		});
	});
	</script>
	