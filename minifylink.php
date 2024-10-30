<?php
/*
Plugin Name: Minify Link
Plugin URI: http://www.fauxzen.com/
Description: Replaces all permalinks with a <a href="http://minify.us/">Minify.us</a> link.
Author: Shelby DeNike
Version: 0.2.4
Author URI: http://www.fauxzen.com/

Licence:
Provided under the GNU General Public Licence v3.0
http://www.gnu.org/licenses/gpl-3.0.txt
*/
function minifyshortcode_handler() {
        $minifyshortcode_output = minifyshortcode_function();
        return $minifyshortcode_output;
}
// Create Shortcode
function minifyshortcode_function() {
        $minifyshortcode_output = file_get_contents("http://minify.us/api.php?u=" . get_permalink());
        return $minifyshortcode_output;
}
// Display short link
function MinifyLink() {
        $minifylink =  file_get_contents("http://minify.us/api.php?u=" . get_permalink());
        echo $minifylink;
}
add_shortcode("minify-perm", "minifyshortcode_handler");
?>
