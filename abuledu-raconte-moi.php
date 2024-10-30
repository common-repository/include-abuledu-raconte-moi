<?php
/*
Plugin Name: abuledu-raconte-moi
Plugin URI: http://redmine.ryxeo.com/projects/
Description: This plugin converts any external raconte-moi URI to an embeded document.
Version: 0.1
Author: Eric Seigne
Author URI: http://www.ryxeo.com
License: GPLv3
*/

  wp_embed_register_handler( 'RaconteMoiAbulEdu', '#http://raconte-moi\.abuledu\.org/(.*)#', 'wp_embed_handler_racontemoi_abuledu' );

  function wp_embed_handler_racontemoi_abuledu( $matches, $attr, $url, $rawattr ) {
    $embed = sprintf(
		     '<iframe src="http://raconte-moi.abuledu.org/%1$s?fullscreen=1" align="left" width="800" height="600" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" allowfullscreen></iframe>',
		     esc_attr($matches[1])
		     );
    return apply_filters( 'embed_racontemoi_abuledu', $embed, $matches, $attr, $url, $rawattr );
  }


?>
