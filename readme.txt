=== Plugin Name ===
Contributors: sdenike
Donate link: http://fauxzen.com/
Tags: permalinks, minify
Requires at least: 2.9
Tested up to: 3.3
Stable tag: trunk

The Minify Link WordPress plugin simply changes all permalinks on your site to Minify links using the Minify.us API.

== Description ==

The Minify Link WordPress plugin simply changes all permalinks on your site to Minify links using the Minify.us API.

== Installation ==

1. Upload `minifylink.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Replace `<?php the_permalink(); ?>` in your template with `<?php MinifyLink() ?>`
4. Use [minify-perm] shortcode in yuor posts or 3rd party plugins

== Changelog ==

= 0.1 =
* Initial Release

= 0.2 =
* Added shortcode [minify-perm]
* Cleaned up a few lines in the plugin
* Removed extra line break

= 0.2.1 =
* Updated install notes.

= 0.2.2 =
* Cleaned up readme
* Cleaned up some code

= 0.2.3 =
* Cleaned up code
* Changed Author URL
* Changed WordPress version compatibility

= 0.2.4 =
* Confirmed working with WordPress 3.3-svn
