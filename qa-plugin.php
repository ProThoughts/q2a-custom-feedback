<?php
/*
    Plugin Name: Custom Feedback
    Plugin URI:
    Plugin Customize feedback mail 
    Plugin Version: 1.0
    Plugin Date: 2017-01-23
    Plugin Author: 38qa.net
    Plugin Author URI: http://38qa.net/
    Plugin License: GPLv2
    Plugin Minimum Question2Answer Version: 1.7
    Plugin Update Check URI:
*/
if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
    header('Location: ../../');
    exit;
}

// Define global constants
@define( 'CFB_DIR', dirname( __FILE__ ) );
@define( 'CFB_FOLDER', basename( dirname( __FILE__ ) ) );
@define( 'CFB_TARGET_THEME_NAME', 'q2a-material-lite');
@define( 'CFB_RELATIVE_PATH', '../qa-plugin/'.CFB_FOLDER.'/');

// overrides
qa_register_plugin_overrides('qa-custom-feedback-overrides.php');
