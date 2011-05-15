=== M-vSlider ===
Contributors: mamirulamin
Donate link: http://mamirulamin.wordpress.com/
Tags: banner, slider, sidebar, widget, plugin
Requires at least: 3.0.1
Tested up to: 3.1.1
Stable tag: trunk

== Description ==

Implementing a featured image gallery into your WordPress theme has never been easier! Showcase your portfolio, animate your header or manage your banners with M-vSlider. M-vSlider by  Muhammad Amir Ul Amin. M-vSlider is multi sliders clone of vSlider (http://www.vibethemes.com/wordpress-plugins/vslider-wordpress-image-slider-plugin/)

= Widget =

In the Appearance -> Widgets in WordPress 3.0.1 you'll find the `M-vSlider - Image Slider` widget. After adding it to your sidebar you can enter an optional `Title` and required `M-vSlider ID` (which you setup in M-vSlider Setup in WP Admin)

= Shortcode =

Insert the slider in your pages or posts with this shortcode

`[m-vslider id="x"]` (where `x` is slider ID)

= Use in Template/PHP code =

Insert this code in your template/theme pages. (if you have installed php-exec plugin then you can insert this code in your post or page too)

`<?php if (function_exists('rslider')) { rslider(x); }?>` (where `x` is slider ID)

== Installation ==

1. Upload `m-vslider` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

Please post your comments and questions at http://mamirulamin.wordpress.com/2010/08/10/mvslider-multi-sliders-clone-of-vslider/

== Screenshots ==

1. Plugin Admin Home
2. Options page where you setup a slider
3. Sidebar Widget Admin Options

== Changelog ==

= 1.0.0 =
First release

== Upgrade Notice ==

N/A
