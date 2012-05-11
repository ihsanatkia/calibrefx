<?php
/**
 * CalibreFx Framework
 *
 * WordPress Themes by CalibreWorks Team
 *
 * @package		CalibreFx
 * @author		CalibreWorks Team
 * @authorlink	http://calibrefx.com
 * @copyright	Copyright (c) 2012, Suntech Inti Perkasa.
 * @license		Commercial
 * @link		http://calibrefx.com
 * @since		Version 1.0
 * @filesource 
 *
 * CalibreFx Comment template
 *
 * @package SalesVenture
 */

if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
	die ( 'Please do not load this page directly. Thanks!' );

if ( post_password_required() ) {
	printf( '<p class="alert">%s</p>', __( 'This post is password protected. Enter the password to view comments.', 'calibrefx' ) );
	return;
}

do_action( 'calibrefx_before_comments' );
do_action( 'calibrefx_comments' );
do_action( 'calibrefx_after_comments' );

do_action( 'calibrefx_before_pings' );
do_action( 'calibrefx_pings' );
do_action( 'calibrefx_after_pings' );

do_action( 'calibrefx_before_comment_form' );
do_action( 'calibrefx_comment_form' );
do_action( 'calibrefx_after_comment_form' );