<?php
/**
 * Plugin Name: docker-wordpress-custom-plugin-load-react-and-run-custom-js-file-demo
 * Plugin URI: http://my.plugin
 * Description: My wordpress plugin
 * Version: 1.0
 * Author: Freewind
 * Author URI: http://my.host
 */

function renderReactRoot() {
    echo '<div id="react-root"></div>';
}
add_action('wp_footer', 'renderReactRoot');

wp_enqueue_script('my-react',
    'https://cdnjs.cloudflare.com/ajax/libs/react/16.11.0/umd/react.production.min.js',
    null,
    null
);

wp_enqueue_script('my-react-dom',
    'https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.11.0/umd/react-dom.production.min.js',
    array('my-react'),
    null
);

wp_enqueue_script('jquery');


wp_enqueue_script('my-react-components',
    plugins_url( 'my-react-components.js', __FILE__ ),
    array('my-react-dom', 'jquery'),
    null
);

?>