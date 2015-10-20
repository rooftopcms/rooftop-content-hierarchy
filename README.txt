=== Plugin Name ===
Contributors: rooftopcms
Tags: rooftop, api, headless, content
Requires at least: 4.3
Tested up to: 4.3
Stable tag: 4.3
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

rooftop-content-heirarchy adds ancestors and children to an API response

== Description ==

rooftop-content-heirarchy adds arrays to the _links key in an API response, with ancestors and children (if they're relevant / present).

The most valuable use for having this data is so you can validate whether a given path of slugs is valid in your
consuming application. For example, given a path /foo/bar/baz, you need to know whether 'bar' is the parent of 'baz'.

Track progress, raise issues and contribute at http://github.com/rooftopcms/rooftop-content-heirarchy

== Installation ==

rooftop-content-heirarchy is a Composer plugin, so you can include it in your Composer.json.

Otherwise you can install manually:

1. Upload the `rooftop-content-heirarchy` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. There is no step 3 :-)

== Frequently Asked Questions ==

= Can this be used without Rooftop CMS? =

Yes, it's a Wordpress plugin you're welcome to use outside the context of Rooftop CMS. We haven't tested it, though.

== Changelog ==

= 0.0.1 =
* Initial release

== What's Rooftop CMS? ==

Rooftop CMS is a hosted, API-first WordPress CMS for developers and content creators. Use WordPress as your content management system, and build your website or application in the language best suited to the job.

https://www.rooftopcms.com