<?php
/*
Plugin Name: All in One Video Pack
Plugin URI: http://kaltura.org/community/viewtopic.php?f=4&t=3
Description: This is not just another video embed tool - it includes every functionality you might need for video and rich-media, including playing, uploading and editing.  
Version: 2.0
Author: Kaltura
Author URI: http://corp.kaltura.com
*/


// backward compatibility for user who have the kalture-interactive-video installed and now trying to activate the new all-in-one-video-pack
if (WP_ADMIN) { // this check should run on admin pages only
	require_once(ABSPATH . 'wp-admin/includes/plugin.php');
	if (is_plugin_active("kaltura-interactive-video/interactive_video.php")) {
		function kaltura_warning_new() {
			echo "
			<div class='updated fade'><p><strong>".__("We're happy to see you've been using the Interactive Video plugin, but in order to upgrade to our new plugin, you'll need to deactivate the old one first. Don't worry, your Interactive Videos will be transferred to the new plugin automatically. Thanks and enjoy!")."</strong></p></div>
			";
		}
		add_action('admin_notices', 'kaltura_warning_new');
	}
	else 
	{
		require_once('all_in_one_video_pack.php');
	}
}
else
{
	require_once('all_in_one_video_pack.php');
}


?>