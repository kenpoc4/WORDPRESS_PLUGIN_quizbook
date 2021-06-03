<?php
/**
 * Plugin Name: Quizbook
 * Plugin URI: https://github.com/kenpoc4/WORDPRESS_PLUGIN_quizbook
 * Description: Pligin para añadir quizes o encuastas con Wordpress
 * Version: 1.0
 * Author: Kenny Poncio
 * Author URI: https://github.com/kenpoc4/
 * License: GPL2
 * License URI: https://www.gnu.org/licences/gpl-2.0.html
 * Text Domain: quizbook
 */

 /**
  * Add post-type
  */
 require_once plugin_dir_path( __FILE__ ) . 'includes/posttypes.php';

 /**
  * Regenerating URLs
  */
 register_activation_hook( __FILE__, 'quizbook_rewrite_flush' );

  /**
  * Add Metaboxes to Quizes
  */
  require_once plugin_dir_path( __FILE__ ) . 'includes/metaboxes.php';