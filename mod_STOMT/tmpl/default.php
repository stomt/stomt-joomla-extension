<?php


// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php if ($stomt_id) { ?>

		<?php if($responsive && $showclose){ ?>

			<script>
				var options = {
				  appId: '<?php echo $stomt_id ?>',
				  colorText: '<?php echo $stomt_color_text ?>',
				  showclose:'<?php echo $showclose ?>',
				  label:'<?php echo $stomt_label ?>'


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
		<?php } else { ?>
			
		<?php } ?>
	</div>

<?php } else { ?>
	<p>Please enter STOMT ID</p>
<?php } ?>



