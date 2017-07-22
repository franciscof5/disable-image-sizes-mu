=== F5 Sites | Disable Images Sizes ===
Contributors: f5sites, franciscof5
Tags: images, wpmu
Stable tag: 1.0
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Donate link: http://www.f5sites.com/donate/

Quick disable wordpress images sizes.

== Description ==

Quick disable wordpress images sizes. Just put it on mu-plugins and no more too much images sizes on upload

[F5 Sites | WordPress Dev](https://www.f5sites.com/software/wordpress/)

[F5 Sites | Disable Images Sizes](
https://www.f5sites.com/software/wordpress/f5sites-disable-image-sizes)

== Installation ==

= From your WordPress dashboard =

1. Visit 'Plugins > Add New'
2. Search for 'F5 Sites | WooCommerce shop_order Tables'
3. Activate it from your Plugins page.

== Screenshots ==

1. Overview of new tables schema via phpMyAdmin


== Frequently Asked Questions ==

= So. It really works? =

Yes! Just enable it and you will have 2 additional tables (wpprefix_shop_order_post & wpprefix_shop_order_posmeta), that will initially have all information from original posts tables. But now, everywhere wp requests posts from post_type=shop_order it will make wordpress redirect the query to new tables, other posts type will work the same.

= What the plugin change in default wordpress development work schema? =

It is a hack, so you will need to have a simple thing in mind, products can easily be synched between servers instances, imported and exported freely without touching orders

= I can't see the value of it's solution =

That can happen, it was made to reduce time in 2 ways:
1. Reduces maintance time: if you clone production data to dev server than you must enable maintance time in the production server to prevent orders losts
2. Reduces time in development: maybe you add the products directly in production server, that's is always slow than work in local development server.

If you still doesn't have a clue what is that about is because the wordpress data management is very trick.

== ChangeLog ==

= 1.0 =
Initial release
