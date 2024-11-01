=== SyntaxHighlighter Evolved: Fortran ===
Contributors: jonlandrum
Donate link: http://www.viper007bond.com/wordpress-plugins/syntaxhighlighter/donate/
Tags: code, fortran, highlight, highlighter, syntax, sourcecode
Requires at least: 2.7
Tested up to: 3.4.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds support for the Fortran language to the SyntaxHighlighter Evolved plugin.

== Description ==

<b>SyntaxHighlighter Evolved: Fortran</b> is a plugin for self-hosted WordPress installations that adds support to Alex Mills' (Viper007) [SyntaxHighlighter Evolved](http://wordpress.org/extend/plugins/syntaxhighlighter/) plugin for the Fortran language.

It provides a brush designed to work with the SyntaxHighlighter Evolved WordPress plugin. To be able to use this plugin, you will need to have the SyntaxHighlighter Evolved plugin installed.

For a live demo, see [this plugin's homepage](http://jonlandrum.com/downloads/syntaxhighlighter-evolved-fortran/).

* This plugin follows the programming conventions outlined by [Alex Mills](http://www.viper007bond.com/) for extending  his plugin: [Adding A New Brush (Language)](http://www.viper007bond.com/wordpress-plugins/syntaxhighlighter/adding-a-new-brush-language/)

* This plugin uses the Fortran brush created by [Shawn Chin](https://gist.github.com/517349).

* This plugin is based on similar work by [Sandro Bilbeisi](http://wordpress.org/extend/plugins/syntaxhighlighter-evolved-php5/).

* [SyntaxHighlighter Evolved](http://wordpress.org/extend/plugins/syntaxhighlighter/) Wordpress plugin by Alex Mills is based on the [SyntaxHighlighter JavaScript package by Alex Gorbatchev](http://alexgorbatchev.com/SyntaxHighlighter/).

== Installation ==

In order to use SyntaxHighlighter Evolved: Fortran, you must first install [SyntaxHighlighter Evolved](http://wordpress.org/extend/plugins/syntaxhighlighter/).

1. Extract all files from `syntaxhighlighter-evolved-fortran.zip`
1. Upload the `syntaxhighlighter-evolved-fortran` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Wrap code you want highlighted in `[fortran]` tags

Alternatively, you can install the plugin from within your WordPress Dashboard by navigating to `Plugins > Add New`, and from there searching for 'SyntaxHighlighter Evolved: Fortran'.

###Plugin Usage###

Wrap your code in `[sourcecode]` tags like so:
`[sourcecode language="fortran"]
    your code here
[/sourcecode]`
Or wrap your code in `[fortran]` tags like so:
`[fortran]
        your code here
[/fortran]`

The shortcodes accept a wide variety of parameters. For details, see the bottom of the SyntaxHighlighter Evolved's settings page.
	
== Frequently Asked Questions ==

= The code is just being displayed raw. It isn't being converted into a code box or anything. What's wrong?  =

Make sure your theme's `footer.php` file has `<?php wp_footer(); ?>` somewhere inside of it, otherwise the plugin won't work.

== Screenshots ==

1. This is a sample image of the plugin in action applied to Fortran code.

== Changelog ==

= 2.0 =
* This update switches the brush file to Shawn Chin's Fortran brush. Provides support for Fortran 77, 95, and 2003, as well as some proprietary functions. Updated version does a much better job selecting key words to highlight.
* Updated readme.txt to better comply with validation rules

= 1.0 =
* Initial release

== Upgrade Notice ==

= 2.0 =
* This update switches the brush file to Shawn Chin's Fortran brush. Provides support for Fortran 77, 90, 95, and 2003, as well as some proprietary functions. Updated version does a much better job selecting key words to highlight.

= 1.0 =
* Initial release
