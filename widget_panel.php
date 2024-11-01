<?php  
    extract($this->loginOpOut);
?>

<!-- Login Panel -->
<?php $opacity_IE = $opacity * 100; ?>
<div id="toppanel" style="opacity:<?php echo $opacity; ?> ; -ms-filter:'alpha(opacity=<?php echo $opacity_IE; ?>)'; filter: alpha(opacity=<?php echo $opacity_IE; ?>);">
	<div id="loginpanel" style="display:none;">
		<div class="ss-content clearfix">
			<div class="second first">
				<h2><?php if($header_text !== '') echo $header_text; ?> </h2>						
				<?php  if($message_text !== '') { ?><p><?php echo $message_text; ?></p><?php } ?>				
			</div>
			<div class="widget-second">
				<?php if ( ! dynamic_sidebar( 'ss-Login' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget">
					<h2 class="widget-title"><?php _e( 'Archives', 'daiv' ); ?></h2>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h2 class="widget-title"><?php _e( 'Meta', 'daiv' ); ?></h2>
					<ul>
						<?php wp_register(); ?>
						<aside><?php wp_loginout(); ?></aside>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
			</div>
		</div>
	</div> <!-- /login -->	

    <!-- The tab on top -->	
	<div class="logintab">
		<ul class="login">
	    	<li class="ss_left">&nbsp;</li>
			<li id="toggle">
				<a id="openlogin" title=" <?php _e('Open'); ?>" class="open <?php  if ($mode !== "vertical")  echo "notext";?>" href="#"><?php  echo $open_widget; ?></a>
				<a id="closelogin" title=" <?php _e('Close'); ?>" style="display: none;" class="close <?php  if ($mode !== "vertical")  echo "notext";?>" href="#"><?php echo $close_widget; ?></a>	
			</li>
	    	<li class="ss_right">&nbsp;</li>
		</ul> 		
	</div> <!-- / top -->

</div> <!--END panel -->	
<?php ?>