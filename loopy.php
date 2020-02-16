<?php
/* Plugin Name: loopy
 * Plugin URI: https://github.com/drdf/loopy
 * Description:
 * Version: 0.1.0
 * Author: David Ringsdorf
 * Author URI: https://davidringsdorf.de/
 * License: MIT
 * Text Domain: loopy
 */

if (!function_exists('loopy')) {

    /**
     * loopy
     *
     * @author: David Ringsdorf <https://davidringsdorf.de/>
     * @version 0.1.0
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
