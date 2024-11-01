<?php  
    extract($this->loginOpOut);  
    $users_can_register = get_option('users_can_register');

?>

<!-- Login Panel -->
<?php $opacity_IE = $opacity * 100; ?>
<div id="toppanel" style="opacity:<?php echo $opacity; ?> ; -ms-filter:'alpha(opacity=<?php echo $opacity_IE; ?>)'; filter: alpha(opacity=<?php echo $opacity_IE; ?>);">

<?php 

	global $user_identity, $user_ID;	
	// If user is logged in or registered, show dashboard links in panel
	if (is_user_logged_in()) { 
	
	$url = get_bloginfo('wpurl') ;
?>
	<div id="loginpanel" style="display:none;">
		<div class="content clearfix">
			<div class="second first">
				<h2><?php if($header_text !== '') echo $header_text; ?> <a href="<?php bloginfo('wpurl') ?>/wp-admin/profile.php" title="Edit your profile"><?php echo $user_identity?></a></h2>						
				<?php  if($message_text !== '') { ?><p><?php echo $message_text; ?></p><?php } ?>
				
			</div>
			<div class="second">			
				<h2><?php _e('Account'); ?></h2>				
				<ul>					
					<li><a href="<?php echo $url; ?>/wp-admin/index.php"><?php _e('Dashboard'); ?></a></li>
					<li><a href="<?php echo $url; ?>/wp-admin/profile.php"><?php _e('Update Profile'); ?></a></li>
					<?php if ( current_user_can('moderate_comments') ) : ?>
						<li><a href="<?php echo $url; ?>/wp-admin/edit-comments.php"><?php _e('Comments'); ?></a></li>
					<?php endif ?>
	        		<li><a href="<?php echo wp_logout_url(get_permalink()); ?>" rel="nofollow" title="<?php _e('Log out'); ?>"><?php _e('Log out'); ?></a></li>
				
				</ul>	
				<?php if ( current_user_can('switch_themes') ) : ?>		
				<h2><?php _e('Appearance'); ?></h2>				
				<ul><?php if ( current_user_can('switch_themes') ) : ?>						
					<li><a href="<?php echo $url; ?>/wp-admin/themes.php"><?php _e('Themes'); ?></a></li><?php endif ?>
					<?php if ( current_user_can('switch_themes') ) : ?>	
					<li><a href="<?php echo $url; ?>/wp-admin/widgets.php"><?php _e('Widgets'); ?></a></li><?php endif ?>
					<?php if ( current_user_can('switch_themes') ) : ?>	
					<li><a href="<?php echo $url; ?>/wp-admin/nav-menus.php"><?php _e('Menus'); ?></a></li><?php endif ?>
					<?php if ( current_user_can('edit_themes') ) : ?>	
					<li><a href="<?php echo $url; ?>/wp-admin/theme-editor.php"><?php _e('Theme Editor'); ?></a></li><?php endif ?>
				</ul>
				<?php endif ?>
			</div>
			<?php if ( current_user_can('edit_posts') ) : ?>
			<div class="second">			
				<h2><?php _e('Posts'); ?></h2>				
				<ul>
					<?php if ( current_user_can('publish_posts') ) : ?>				
						<li><a href="<?php echo $url; ?>/wp-admin/post-new.php"><?php _e('New Post'); ?></a></li><?php endif ?>
					<?php if ( current_user_can('edit_published_posts') ) : ?>
						<li><a href="<?php echo $url; ?>/wp-admin/edit.php"><?php _e('Edit Posts'); ?></a></li><?php endif ?>
					<?php if ( current_user_can('publish_posts') ) : ?>
						<li><a href="<?php echo $url; ?>/wp-admin/edit-tags.php?taxonomy=post_tag"><?php _e('Tags'); ?></a></li><?php endif ?>
					<?php if ( current_user_can('publish_posts') ) : ?>
						<li><a href="<?php echo $url; ?>/wp-admin/edit-tags.php?taxonomy=category"><?php _e('Categories'); ?></a></li><?php endif ?>
				</ul>
				<?php if ( current_user_can('update_plugins') ) : ?>		
					<h2><?php _e('Plugins'); ?></h2>				
					<ul><?php if ( current_user_can('update_plugins') ) : ?>							
							<li><a href="<?php echo $url; ?>/wp-admin/plugins.php"><?php _e('Plugins'); ?></a></li><?php endif ?>
						<?php if ( current_user_can('update_plugins') ) : ?>	
							<li><a href="<?php echo $url; ?>/wp-admin/plugin-install.php"><?php _e('Install a Plugin'); ?></a></li><?php endif ?>
						<?php if ( current_user_can('update_plugins') ) : ?>	
							<li><a href="<?php echo $url; ?>/wp-admin/plugin-editor.php"><?php _e('Plugin Editor'); ?></a></li><?php endif ?>
					</ul>
				<?php endif ?>
			</div>
<?php endif ?>

<?php if ( current_user_can('edit_posts') ) : ?>
			<div class="second">
				<?php if ( current_user_can('edit_pages') ) : ?>	
				<h2><?php _e('Pages'); ?></h2>				
				<ul>		
					<li><a href="<?php echo $url; ?>/wp-admin/post-new.php?post_type=page"><?php _e('New Page'); ?></a></li>
					<li><a href="<?php echo $url; ?>/wp-admin/edit.php?post_type=page"><?php _e('Edit Pages'); ?></a></li>
				</ul>
				<?php endif ?>
				<?php if ( current_user_can('upload_files') ) : ?>
				<h2><?php _e('Library'); ?></h2>				
				<ul>					
					<li><a href="<?php echo $url; ?>/wp-admin/upload.php"><?php _e('Library'); ?></a></li>
					<li><a href="<?php echo $url; ?>/wp-admin/media-new.php"><?php _e('Add New'); ?></a></li>
				</ul>
				<?php endif ?>
				<?php if ( current_user_can('edit_users') ) : ?>		
				<h2><?php _e('Users'); ?></h2>				
				<ul>						
					<li><a href="<?php echo $url; ?>/wp-admin/users.php"><?php _e('Users'); ?></a></li>
					<?php if ( current_user_can('create_users') ) : ?>
					<li><a href="<?php echo $url; ?>/wp-admin/user-new.php"><?php _e('Add New'); ?></a></li><?php endif ?>
				</ul>
				<?php endif ?>
			</div>
<?php endif ?>
<?php if ( current_user_can('activate_plugins') ) : ?>
			<div class="second">			
				<h2><?php _e('Settings'); ?></h2>				
				<ul>						
					<li><a href="<?php echo $url; ?>/wp-admin/options-general.php"><?php _e('General'); ?></a></li>
					<li><a href="<?php echo $url; ?>/wp-admin/options-writing.php"><?php _e('Writing'); ?></a></li>
					<li><a href="<?php echo $url; ?>/wp-admin/options-reading.php"><?php _e('Reading'); ?></a></li>
					<li><a href="<?php echo $url; ?>/wp-admin/options-discussion.php"><?php _e('Discussion'); ?></a></li>
					<li><a href="<?php echo $url; ?>/wp-admin/options-media.php"><?php _e('Media'); ?></a></li>
					<li><a href="<?php echo $url; ?>/wp-admin/options-privacy.php"><?php _e('Privacy'); ?></a></li>
					<li><a href="<?php echo $url; ?>/wp-admin/options-permalink.php"><?php _e('Permalinks'); ?></a></li>
				</ul>
			</div>
<?php endif ?>
		</div>

	</div> <!-- /login -->	

    <!-- The tab on top -->	
	<div class="logintab">
		<ul class="login">
	    	<li class="ss_left">&nbsp;</li>
	    	<!-- Logout -->
	        <li><a href="<?php if( is_front_page() ) { 
	                           echo wp_logout_url( home_url()); } 
	                           else { echo wp_logout_url(get_permalink()); }  ?>" rel="nofollow" title="<?php _e('Log out'); ?>" class="logout <?php  if ($mode !== "vertical")  echo "notext";?>"><?php  _e('Log out'); ?></a></li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="openlogin" title=" <?php _e('Dashboard'); ?>" class="open <?php  if ($mode !== "vertical")  echo "notext";?>" href="#"><?php  _e('Dashboard'); ?></a>
				<a id="closelogin" title=" <?php _e('Close'); ?>" style="display: none;" class="close <?php  if ($mode !== "vertical")  echo "notext";?>" href="#"><?php _e('Close'); ?></a>	
			</li>
	    	<li class="ss_right">&nbsp;</li>
		</ul> 
		
	</div> <!-- / top -->
<?php 
	// Else if user is not logged in, show login and register forms
	} else {	

?>
	<div id="loginpanel">
		<div class="content clearfix">
			<div class="second first">
				<h2><?php echo $header_text.' '; bloginfo('name'); ?></h2>
			</div>
			<div class="second">
			<h2><?php _e('Log in'); ?></h2>
				<!-- Login Form -->
				<form class="clearfix test" action="<?php bloginfo('wpurl') ; ?>/wp-login.php" method="post">
					
					<fieldset><label class="login_label" for="log"><?php _e('Username') ?>:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" />
					<label class="login_label" for="pwd"><?php _e('Password') ?>:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" />
	            	<label style="display:none;"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /><?php _e('Remember Me') ?></label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
					<a class="lost-pwd" href="<?php bloginfo('wpurl') ; ?>/wp-login.php?action=lostpassword"><?php _e('Lost your password?') ?></a>
				  </fieldset>
				</form>
			</div>
			
<?php if ($users_can_register) : ?>	
			<div class="second">
				<h2><?php _e('Register For This Site'); ?></h2>	
				<!-- Register Form -->
				
				<form name="registerform" id="registerform" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post">					
					<fieldset><label class="login_label" for="user_login"><?php _e('Username') ?></label>
					<input class="field input" type="text" name="user_login" id="user_login" value="" size="20" tabindex="10" />
					<label class="login_label" for="user_email"><?php _e('E-mail') ?></label>
					<input class="field input" type="text" name="user_email" id="user_email" value="" size="25" tabindex="20" />
					<?php do_action('register_form'); ?>
					<label id="reg_passmail"><?php _e('A password will be e-mailed to you.') ?></label>
					<input type="submit" name="wp-submit" id="wp-submit" value="<?php _e('Register'); ?>" class="bt_register" />
				</fieldset>
				</form>
				
			</div>
			<div class="second">
			    <?php  if($guest_header_text !== '') { ?><h2><?php echo $guest_header_text; ?></h2><?php } ?>				
				<?php  if($guest_message_text !== '') { ?><p><?php echo $guest_message_text; ?></p><?php } ?>
			</div>
<?php endif ?>			
			
		</div>

	</div> <!-- /login -->	

    <!-- The tab on top -->	
	<div class="logintab">
		<ul class="login">
	    	<li class="ss_left">&nbsp;</li>
	    	<!-- Login / Register -->
			<li id="toggle">
				<a id="openlogin" href="#" title="<?php _e('Log In'); ?> | <?php if ($users_can_register)  _e('Register');  ?>" class=" open <?php  if ($mode !== "vertical") echo "notext";?>" ><?php _e('Log In'); ?> <?php if ($users_can_register)  _e('Register');  ?></a>
				<a id="closelogin" title="<?php _e('Close'); ?>" style="display: none;" class="close <?php  if ($mode !== "vertical") echo "notext";?>" href="#"><?php  _e('Close'); ?></a>			
			</li>
	    	<li class="ss_right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->			
<?php } ?>	

</div> <!--END panel -->	
<?php ?>