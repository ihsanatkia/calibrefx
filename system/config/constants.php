<?php

/**
 * CalibreFx
 *
 * WordPress Themes Framework by CalibreWorks Team
 *
 * @package		CalibreFx
 * @author		CalibreWorks Team
 * @copyright           Copyright (c) 2012, CalibreWorks. (http://www.calibreworks.com/)
 * @license		Commercial
 * @link		http://calibrefx.com
 * @since		Version 1.0
 * @filesource 
 *
 * WARNING: This file is part of the core CalibreFx framework. DO NOT edit
 * this file under any circumstances. 
 *
 * This define the framework constants
 *
 * @package CalibreFx
 */

/** Define CALIBREFX Root Directory Constant */
!defined('CALIBREFX_CACHE_URI') && define('CALIBREFX_CACHE_URI', CALIBREFX_URICALIBREFX_URI . '/cache');
!defined('CALIBREFX_LOG_URI') && define('CALIBREFX_LOG_URI', CALIBREFX_URI . '/log');
!defined('CALIBREFX_SYS_URI') && define('CALIBREFX_SYS_URI', CALIBREFX_URI . '/system');

!defined('CALIBREFX_CONFIG_URI') && define('CALIBREFX_CONFIG_URI', CALIBREFX_SYS_URI . '/config');
!defined('CALIBREFX_LIBRARY_URI') && define('CALIBREFX_LIBRARY_URI', CALIBREFX_SYS_URI . '/libraries');
!defined('CALIBREFX_HELPER_URI') && define('CALIBREFX_HELPER_URI', CALIBREFX_SYS_URI . '/helpers');
!defined('CALIBREFX_SHORTCODE_URI') && define('CALIBREFX_SHORTCODE_URI', CALIBREFX_SYS_URI . '/shortcodes');
!defined('CALIBREFX_MODEL_URI') && define('CALIBREFX_MODEL_URI', CALIBREFX_SYS_URI . '/models');
!defined('CALIBREFX_WIDGET_URI') && define('CALIBREFX_WIDGET_URI', CALIBREFX_SYS_URI . '/widgets');
!defined('CALIBREFX_HOOK_URI') && define('CALIBREFX_HOOK_URI', CALIBREFX_SYS_URI . '/hooks');

/** Define Assets Directory Constants */
!defined('CALIBREFX_IMAGES_URI') && define('CALIBREFX_IMAGES_URI', CALIBREFX_URI . '/assets/img');
!defined('CALIBREFX_JS_URI') && define('CALIBREFX_JS_URI', CALIBREFX_URI . '/assets/js');
!defined('CALIBREFX_CSS_URI') && define('CALIBREFX_CSS_URI', CALIBREFX_URI . '/assets/css');

/** Define Assets URL Constants */
!defined('CALIBREFX_IMAGES_URL') && define('CALIBREFX_IMAGES_URL', CALIBREFX_URL . '/assets/img');
!defined('CALIBREFX_JS_URL') && define('CALIBREFX_JS_URL', CALIBREFX_URL . '/assets/js');
!defined('CALIBREFX_CSS_URL') && define('CALIBREFX_CSS_URL', CALIBREFX_URL . '/assets/css');


/** Define CALIBREFX Child Directory Constant */
define('CHILD_URI', get_stylesheet_directory());
define('CHILD_CACHE_URI', CHILD_URI . '/cache');
define('CHILD_IMAGES_URI', CHILD_URI . '/assets/img');
define('CHILD_JS_URI', CHILD_URI . '/assets/js');
define('CHILD_CSS_URI', CHILD_URI . '/assets/css');

/** Define CALIBREFX Child URL Location Constant */
define('CHILD_URL', get_stylesheet_directory_uri());
define('CHILD_CACHE_URL', CHILD_URL . '/cache');
define('CHILD_IMAGES_URL', CHILD_URL . '/assets/img');
define('CHILD_JS_URL', CHILD_URL . '/assets/js');
define('CHILD_CSS_URL', CHILD_URL . '/assets/css');



/** File and Directory Modes */
!defined('FILE_READ_MODE') && define('FILE_READ_MODE', 0644);
!defined('FILE_WRITE_MODE') && define('FILE_WRITE_MODE', 0666);
!defined('DIR_READ_MODE') && define('DIR_READ_MODE', 0755);
!defined('DIR_WRITE_MODE') && define('DIR_WRITE_MODE', 0777);

/*
  |--------------------------------------------------------------------------
  | File Stream Modes
  |--------------------------------------------------------------------------
  |
  | These modes are used when working with fopen()/popen()
  |
 */
!defined('FOPEN_READ') && define('FOPEN_READ', 'rb');
!defined('FOPEN_READ_WRITE') && define('FOPEN_READ_WRITE', 'r+b');
!defined('FOPEN_WRITE_CREATE_DESTRUCTIVE') && define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb');
!defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE') && define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b');
!defined('FOPEN_WRITE_CREATE') && define('FOPEN_WRITE_CREATE', 'ab');
!defined('FOPEN_READ_WRITE_CREATE') && define('FOPEN_READ_WRITE_CREATE', 'a+b');
!defined('FOPEN_READ_WRITE_CREATE') && define('FOPEN_READ_WRITE_CREATE', 'a+b');
!defined('FOPEN_WRITE_CREATE_STRICT') && define('FOPEN_WRITE_CREATE_STRICT', 'xb');
!defined('FOPEN_READ_WRITE_CREATE_STRICT') && define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');