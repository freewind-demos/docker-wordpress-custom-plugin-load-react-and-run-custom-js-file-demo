<?php
/**
 * Plugin Name: docker-wordpress-custom-plugin-load-js-file-in-head-demo
 * Plugin URI: http://my.plugin
 * Description: My wordpress plugin
 * Version: 1.0
 * Author: Freewind
 * Author URI: http://my.host
 */

wp_register_script('lodash-from-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.core.js');
wp_enqueue_script('lodash-from-cdn');

wp_add_inline_script('lodash-from-cdn', '<script>alert(_.VERSION)</script>');

?>