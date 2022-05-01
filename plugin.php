<?php
/*
Plugin Name: Mete Redirect instead of 301
Plugin URI: https://github.com/rod41732/yourls-meta-redirect-instead
Description: Redirect use using Meta tag instead of 301 repsone for example
Version: 0.0.1
Author: Rodchananat Khunakornophat
Author URI: https://github.com/rod41732
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action('pre_redirect', 'meta_redirect_to_location');

function meta_redirect_to_location($args) {
  $location = $args[0];
  echo '<meta http-equiv="refresh" content="0;url=' . $location . '" />';
  echo '<meta name="referrer" content="unsafe-url">';
  die();
}

