=== WP Custom HTML Page ===
Tags: html,custom,uri
Donate link: https://witserbia.com/wordpress-plugins/wp-custom-html-pages/
Requires at least: 3.6.1
Tested up to: 5.1
Stable tag: 0.5.1
Requires PHP: 5.2
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Display full custom HTML on custom permalink address, or put it inside content as a shortcode.

== Description ==
WP Custom HTML Pages plugin has two functionalities:

1 - Create a custom HTML document output at a custom permalink address, completely bypassing Wordpress templating. This is useful in cases when you just want to output some HTML without uploading the page to the server.

2 - Create a shortcode which outputs your custom HTML. 

== Installation ==
Download from the repository (by searching for \"WP Custom HTML Pages Milos Stojanovic\") and activate.

== Upgrade ==
If upgrading from 0.4.x to 0.5.x - plugin reinstallation is recommended instead, otherwise you will still be limited to 65,535 characters per html document. This is because I haven't implemented version tracking prior to v0.5 and I don't want to use WP's costly version checking. To reinstall the plugin without losing any content:
1 - Settings->WP Custom HTML Pages->Uninstallation Options - Make sure the option "Completely remove WP Custom..." is set to *OFF*, otherwise you will lose your URI mapping during uninstallation.
2 - Deactivate and *uninstall* the plugin.
3 - Go to Add Plugins and search for *wp custom html page milos stojanovic* or manually upload the latest version zip.

== Frequently Asked Questions ==
Q: Why would I need this plugin just to show an HTML page?
A:  So you can quickly display your custom HTML pages without bothering to upload the page to the server. It is useful in cases when you don\'t have access to your hosting FTP server, or if .htaccess rules are giving you trouble to link to the page. Also, you get a pretty URI to the page rather than having to link directly to the .html document.

== Screenshots ==
1. Admin menu, under Settings - WP Custom HTML Pages
2. Single HTML page edit screen, HTML Pages are submenu of Pages

== Changelog ==
v 0.5.1 - Custom permalinks will now work with variable parameters within the request, if the option is enabled in settings (ie website.com/pagename?param=example will lead to /pagename). This option is OFF by default, to prevent breakings of existing setups.
v 0.5.0 - Changed html column type in db to mediumtext, to allow larger html pages (unavailable in upgrade, this will require reinstallation of plugin)
v 0.4.5 - Fixed PHP error messages, added quick link to the edited page
v 0.4.3 - Security improvement, gave up on supporting subdirectory installs (for now)
v 0.4.2 - Fixed minor bug which affected users who had error reporting on
v 0.4.1 - Fixed the bug with escaped quote characters
v 0.4 - More polishing
v 0.3 - Feature: Added Ace editor for editing page code. Fix: Removed requirement for custom URI to start with forward slash. TODO: Option to use textarea instead of Ace editor.
v 0.2 - Cleaned code a bit, changes to readme.txt, added screenshots and icon to repository.
v 0.1 - Published