=== Post Connector ===
Contributors: never5, barrykooij
Donate link: https://www.post-connector.com/
Tags: post connector, related, related posts, post connection, connection, connections, shortcode, widget
Requires at least: 5.0
Tested up to: 6.3
Stable tag: 1.0.10
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A WordPress plugin that allows you to easily create related posts that don't lag your server!

== Description ==

= Post Connector =

In WordPress, post types are often related, for instance, you might want to relate recipes to ingredients. But to do so, you’d normally have to use a custom taxonomy. With Post Connector, you can directly relate post types to post types, foregoing all the hassle of having to create loads of custom taxonomies and just allowing you to do what you really want to do.

> **Premium features**
>
> The Pro version of the plugin comes with the following features:
>
> - Sortable post connections
> - Backwards linking (parent to child AND child to parent)
> - A developer friendly API
> - Priority support
>
> [More information](https://www.post-connector.com/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=after-features-link) | [Upgrade now >>](https://www.post-connector.com/go-pro/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=after-features-link)

= No coding required =
Creating links, linking posts and displaying posts in Post Connector can all be done without coding. Stuff you used to need a developer for can now “just” be done by clicking around in your WordPress backend.

= Automatically displaying linked posts =
Automatically displaying linked posts introduces a new way of displaying linked posts. Next to our widget and shortcode you can now display linked posts by let Post Connector append them to your posts. This new feature prevents the need of editing your theme files allowing you to easily switch themes in the future.

= Unlimited links =
Unlimited links, in all ways. You can create links in links as many times as you want, no limitations. Whether you want to relate one post to 10 others of a different post type or you want to relate a post to posts in several different post types: it’s all easily done.

= Widget & Shortcode =
Post Connector includes a widget for displaying linked posts. Of course you can add the widget multiple times, displaying different links and/or different parents. Next to this you can set the widget’s title, choose whether you want the child posts to be clickable and if you would like to display the excerpt for each child.

Post Connector also includes a shortcode  for displaying linked posts. This enable you to output specific linked posts anywhere you can type content (e.g. pages) by simply entering the shortcode. Heck, you don’t even to remember that the shortcode is. Just click the Post Connector icon in the editor, set a few settings and click “Insert Shortcode” and you’re done.

= Multilingual =
Post Connector is available in English, Dutch, German and Spanish and soon many more languages. Post Connector will automatically select the correct language based on your WordPress installation language.

= Network/Multisite compatible =
Post Connector is WordPress Network / Multisite compatible. Each site will have its own version of Post Connector and thus have it own links.

**More information**

- Other [WordPress plugins](http://profiles.wordpress.org/barrykooij/) by [Barry Kooij](http://www.barrykooij.com/)
- Contact Barry on Twitter: [@CageNL](http://twitter.com/CageNL)
- If you're a dev, follow or contribute to the [Post Connector plugin on GitHub](https://github.com/barrykooij/post-connector)


== Installation ==

= Installing the plugin =
1. In your WordPress admin panel, go to *Plugins > New Plugin*, search for *Post Connector* and click "Install now"
1. Alternatively, download the plugin and upload the contents of `post-connector.zip` to your plugins directory, which usually is `/wp-content/plugins/`.
1. Activate the plugin

== Frequently Asked Questions ==



== Screenshots ==

1. The connection overview screen. Here you can manage your connections.
2. The connection edit screen. Here you can edit a connection.
3. The connection edit screen. Here you can edit a connection.
4. Example output of linked posts.
5. The linking posts screen. Here you can link posts to each other.
6. The edit post screen. Post Connector adds a meta box so you can link posts to each other with just a few clicks.
7. Post Connector comes with a shortcode generator so you can display linked posts anywhere you want.
8. Post Connector comes with a widget so you can display linked posts in any sidebar you want.

== Changelog ==

= 1.0.10 - August 10, 2023 =
* Tweak: Fixed a XSS vulnerability in the admin area. CVE-2023-28931, props Juampa Rodríguez.
* Tweak: Fixed various other unescaped attribute and html output in the admin area.

= 1.0.9 - April 3, 2018 =
* Tweak: Registering widgets differently, no longer using create_function. Fixes PHP 7.2+ notice.

= 1.0.8 - January 21, 2016 =
* Fixed a bug that caused translation not to load properly.
* Updated translation files.

= 1.0.7 - January 14, 2016 =
* Fixed a bug where wp_reset_postdata() did not actually reset post data because admin.

= 1.0.6 - August 18, 2015 =
* Fixed shortcode and widget get_parent/get_child bug.
* Fixed a backward compat bug.
* Added possibility of adding image to widget.
* Set thumbnail default to false.

= 1.0.5 - April 26, 2015 =
* Fixed a display excerpt bug in shortcode.
* Added 'pc_manual_link_post_statuses' filter to allow modification of post statuses of posts in link existing screen.

= 1.0.4 - April 20, 2015 =
* Escaped view filter URL when manually linking posts to prevent possible XSS.

= 1.0.3 - December 29, 2014 =
* Changed the way the plugin is loaded.
* Fixed TinyMCE bug that removed all buttons if user had insufficient permissions, props remyvv.

= 1.0.2 - December 16, 2014 =
* Changed the way the plugin is loaded.

= 1.0.1 - July 21, 2014 =
* Added the 'pc_connection_edit_form_display_linked_children' action.

= 1.0.0 - July 13, 2014 =
* Initial version

== Upgrade Notice ==
