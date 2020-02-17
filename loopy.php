<?php
/* Plugin Name: loopy
 * Plugin URI: https://github.com/drdf/loopy
 * Description: For the loopy developers who want to iterate with `foreach` over `WP_Query`.
 * Version: 1.0.0
 * Author: David Ringsdorf
 * Author URI: https://davidringsdorf.de/
 * License: MIT
 * Text Domain: loopy
 */

if (!function_exists('loopy')) {

    /**
     * loopy
     *
     * For the loopy developers who want to iterate with `foreach` over `WP_Query`.
     *
     * @author David Ringsdorf <https://davidringsdorf.de/>
     * @package loopy
     * @version 1.0.0
     * @license MIT
     */
    function loopy(WP_Query $wpQuery) {
        $wpQuery->rewind_posts();
        while ( $wpQuery->have_posts() ) {
            $wpQuery->the_post();
            yield get_post();
        }
        wp_reset_postdata();
    }
}
