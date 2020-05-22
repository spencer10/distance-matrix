<?php
/**
* Plugin Name: Distance Matrix API
* Plugin URI: https://www.yourwebsiteurl.com/
* Description: Plugin to calculate distance between 2 points.
* Version: 1.0
* Author: Aaron Brown
* Author URI: http://yourwebsiteurl.com/
**/

// add_action("admin_post_contact_form", "prefix_send_email_to_admin");

// add_action("wp_head", "distance_matrix");

require_once plugin_dir_path(__FILE__) . 'distance_matrix_api.php';
require_once plugin_dir_path(__FILE__) . 'distance_matrix_form.php';
require_once plugin_dir_path(__FILE__) . '/includes/dm-page.php';
require_once plugin_dir_path(__FILE__) . '/includes/dm_functions.php';



?>