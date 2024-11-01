=== SuperSlider-Login ===
Contributors: Daiv
Donate link: http://superslider.daivmowbray.com/support-me/donate/
Plugin URI: http://superslider.daivmowbray.com/superslider/superslider-login
Tags: superslider, widget, register, animated, login, mootools, slidein, panel
Requires at least: 3
Tested up to: 3.5.1
Stable tag: 3.2

Add style with this slidein login-register-dashboard panel or multi-widget panel. Theme based, animated, customizable, uses mootools java script.

== Description ==

Add some style to your site with this slide-in login-register-dashboard panel or multi-widget panel. Theme based, animated, automatic user detection, uses mootools 1.4.5 java script. This plugin is part of the SuperSlider series. Get more supersliders at [supersliders](http://wordpress.org/extend/plugins/superslider/ "SuperSliders")


**Features**

* dashboard links in the slidein panel
* Load the slidein panel with widgets.
* complete global control from options page
* Control transition time, type.

**Demos**

This plugin can be seen in use here:

* [Demo 1](http://superslider.daivmowbray.com/2009/superslider-login-demo "Demo")


== Screenshots ==

1. ![login sample](screenshot-1.png "login sample horizontal slide")
2. ![login sample](screenshot-2.png "login sample horizontal slide")
3. ![login sample](screenshot-3.png "login sample vertical slide")
4. ![SuperSlider-login options screen](screenshot-4.png "SuperSlider-login options screen")

**Support**

If you have any problems or suggestions regarding this plugin [please speak up](http://wordpress.org/support/plugin/superslider-login "support forum")

**Plugins**
Download These Plugins here:

* [SuperSlider-Show](http://wordpress.org/extend/plugins/superslider-show/ "SuperSlider-Show")
* [SuperSlider-Perpost-Code](http://wordpress.org/extend/plugins/superslider-perpost-code/ "SuperSlider-Perpost-Code")
* [Superslider-PostsinCat](http://wordpress.org/extend/plugins/superslider-postsincat/ "Superslider-PostsinCat")

**NOTICE**

* The downloaded folder's name should be superslider-login

== Installation ==

**The Easy Way**

In your WordPress admin, go to 'Plugins' and then click on 'Add New'.
In the search box, type in 'SuperSlider-Login' and hit enter. This plugin should be the first and likely the only result.
Click on the 'Install' link.
Once installed, click the 'Activate this plugin' link.

**The Hard Way**

Download the .zip file containing the plugin, unzip.
Upload the Superslider-Login folder into your /wp-content/plugins/ directory 
Find the Superslider-Login plugin in the WordPress admin on the 'Plugins' page and click 'Activate'


== Upgrade Notice ==

You may need to re-save your settings/ options when upgrading

== USAGE ==

If you are not sure how this plugin works you may want to read the following.

* First ensure that you have uploaded all of the plugin files into wp-content/plugins/superslider-login folder.
* Go to your WordPress admin panel and stop in to the plugins control page. Activate the SuperSlider-login plugin.
* Go to the SuperSlider-login settings page and set your preferred options.

You should be able to view your new login slidein panel in your site.
You can adjust how the slidein login panel looks and works by making adjustments in the plugin settings page.

== OPTIONS AND CONFIGURATIONS ==

Available under > settings > SuperSlider-login

* Panel type to use: login or widget
* theme css files to use
* transition type
* transition speed
* Overlay opacity
* transition time
* to load or not Mootools.js
* css files storage loaction

----------


== Themes ==

Create your own graphic theme based on one of these provided.

**Available themes**

* default
* blue
* black
* custom


== Frequently Asked Questions ==	

=  Why isn't my login working? =

>*You first need to check that your web site page isn't loading more than 1 copy of mootools javascript into the head of your file.
>*While reading the source code of your website files header look to see if another plugin is using jquery. This may cause a javascript conflict. Jquery and mootools are not always compatible.

=  How do I change the style of the login? =
  
>I recommend that you move the folder plugin-data to your wp-content folder if you already have a plugin-data folder there, just move the superslider folder. Remember to change the css location option in the settings page for this plugin. Or edit directly: **wp-content/plugins/superslider-show/plugin-data/superslider/ssLogin/custom/custom.css** Alternatively, you can copy those rules into your WordPress themes, style file. Then remember to change the css location option in the settings page for this plugin.
  

= The stylesheet doesn't seem to be having any effect? =
 
>Check this url in your browser:
>http://yourblogaddress/wp-content/plugins/superslider-login/plugin-data/superslider/ssLogin/default/default.css
>If you don't see a plaintext file with css style rules, there may be something wrong with your .htaccess file (mod_rewrite). If you don't know how to fix this, you can copy the style rules there into your themes style file.

= How do I use different graphics and symbols for the tab? =

>You can upload your own images to
>http://yourblogaddress/wp-content/plugins/superslider-login/plugin-data/superslider/ssLogin/custom/images


== CAVEAT ==

Currently this plugin relies on Javascript to create the slide in.
If a user's browser doesn't support javascript the plugin will not display.

== Changelog ==

* 3.2 (2013/2/25)

  * fixed a backside js error
  * added some css rules

* 3.1 (2013/1/21)

  * added missing js file

* 3 (2012/11/20)

  * Added the panel type option
  * Added the load with widgets option
  * Added widget tab text options
  * updated language functions - now is able to translate


* 2.1 (2012/11/15)

  * updated javascript to mootools 1.4.5
  * updated functions to WP 3+.

* 2.0 (2012/03/27)

  * updated javascript to mootools 1.4
  * added theme folder as optional css file storage option
  * updated css to use css3 rounded corners on tab.

* 1.0 (2010/06/02)

  * fixed link to settings page
  * added save options upon deactivation option

* 0.9 (2010/04/20)

    * fixed salutation at tab top when not logged in.
    * fixed css issue with IE.

* 0.8 (2010/02/14)

  * logged in user name link repaired, now works.
  * updated for WP 2.9
  * added as submenu for superslider
  
* 0.7 (2009/11/20)

  * fixed IE css png with gifs

* 0.6 (2009/10/24)

    * changed js var names to avoid conflicts

* 0.6 (2009/10/24)

    * fixed theme independence from ss-base.
    * adjustments to the css and tab graphics.

* 0.5.5 (2009/9/27)

    * made xhtml compliant.

* 0.5.4 (2009/9/27)

    * fixed css bugs, tab overflow, display block.


* 0.5.3 (2009/9/25)

    * fixed graphics for the panel bottom on vertical slider.

* 0.5.2 (2009/9/21)

    * changed theme graphics to css sprites.
    * changed css loader to use wp_enqueue_style

* 0.5 (2009/7/27)

    * changed the logout redirect to work properly on home page
    * added option to define any custom link to open the slidein panel
    * updated java script to be compatable with jquery
    * updated mootools to 1.2.3
    * added slide to page top when using custom link

* 0.4 (2009/6/30)

    * changed the hidden tab text to css controlled.
    * changed tab class to logintab

* 0.3 (2009/6/26)

    * issue with the css failed on safari

* 0.2 (2009/6/19)

    * admin tabs fixed

* 0.1 (2009/6/15)

    * first public launch

---------------------------------------------------------------------------