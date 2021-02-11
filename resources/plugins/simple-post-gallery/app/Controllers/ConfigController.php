<?php

namespace PostGallery\Controllers;

use WPMVC\MVC\Controller;

/**
 * Config Controller.
 *
 * @author Alejandro Mostajo <http://about.me/amostajo>
 * @copyright 10Quality <http://www.10quality.com>
 * @package PostGallery
 * @version 2.3.9
 */
class ConfigController extends Controller
{
    /**
     * Enqueues and registers scripts.
     * @since 1.0.0
     */
    public function enqueue()
    {
        wp_register_style(
            'swipebox',
            assets_url( 'css/swipebox.min.css', __FILE__ ),
            [],
            '1.4.7'
        );
        wp_register_script(
            'swipebox',
            assets_url( 'js/jquery.swipebox.min.js', __FILE__ ),
            [ 'jquery' ],
            '1.4.7',
            true
        );
    }
    /**
     * Returns action links.
     * Filter "plugin_action_links_[basename]"
     * Wordpress hook
     * @since 2.0.0
     *
     * @param array $links Plugin action links.
     *
     * @return array
     */
    public function plugin_links( $links = [] )
    {
        return array_merge( [
            '<a href="' . admin_url( 'options-general.php?page=post-gallery-settings' ) . '">'
                . __( 'Settings' )
                . '</a>'
        ], $links );
    }
}