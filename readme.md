# Ubik Admin

A library of functions, snippets, and hacks that alter the WordPress admin experience. This Ubik component is a little more slapdash than some of the others; be prepared to wade in and check sources rather than blindly activating everything.

* Post editor: disable visual editor completely.
* Post list: filter by tag.
* Post list: hide category filter.
* Post list: post thumbnails.
* Term editor: optional re-arrangement of some elements on the edit tags view.
* User contact methods: add Facebook, Flickr, GitHub, Google+, Instagram, and Twitter
* User contact methods: remove AIM, Jabber, and Yahoo.
* User descriptions: allow HTML.
* View all settings hack (activate and browse to the Options menu).
* View all shortcodes snippet by [Paulund](http://www.paulund.co.uk).

Part of the [Ubik](https://github.com/synapticism/ubik) family of WordPress components.



## Installation

Install via Composer:

```composer require synapticism/ubik-admin```

Install via Bower (warning: no dependency management):

```bower install https://github.com/synapticism/ubik-admin.git -D```

See [Pendrell](https://github.com/synapticism/pendrell) for an example of integration and usage.



## Configuration

Two ways to configure this component:

* Set constants and variables in `functions.php` (or some equivalent in your theme) prior to loading this component.
* Copy `ubik-admin-config-defaults.php` to `ubik-admin-config.php` and modify to suit your needs.

There are many options for this component; browse the source to see them all.



## License

GPLv3.
