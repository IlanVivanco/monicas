# Monicas Theme for Elementor

This is a WordPress Child Theme for Elementor's Hello Theme, developed and designed by [Ilán Vivanco](https://www.ilanvivanco.com).

## Set up of a new Child Theme

1. In your site's admin panel, go to Plugins > Installed Plugins and click <kbd>Add New</kbd>.
1. Install both `Elementor` and `Elementor Pro` plugins.
1. Go to Appearance > Themes and click <kbd>Add New</kbd>.
1. Type "Hello Elementor" in the search field.
1. Click on <kbd>Install</kbd>.
1. After that, `Upload` and `Activate` the files of this theme as a new child-theme.
1. Navigate to **Appearance > Customize** in your admin panel and customize to your needs.
1. Create a new page, click <kbd>Edit with Elementor</kbd>.
1. Click the **hamburger** menu icon in the upper left corner of the `Elementor Widget Panel`, and click on [Site Settings](https://elementor.com/help/site-settings/). Here you have options to control the Design System which consists of [Global Colors](https://elementor.com/help/global-colors/) and [Global Fonts](https://elementor.com/help/global-fonts/), Theme Builder which consists of Typography, Buttons, Images, and Form Fields settings, Header and Footer customizations.

## Customizations

Please consult the [Elementor Developers Docs](https://developers.elementor.com/) on how to extend Elementor core.

### Available Hooks on Hello theme

To prevent the loading of any of the these settings, use the following by editting the `functions.php`:

```php
add_filter( 'choose-from-the-list-below', '__return_false' );
```

-  `hello_elementor_enqueue_style` enqueue style
-  `hello_elementor_enqueue_theme_style` load theme-specific style (default: load)
-  `hello_elementor_load_textdomain` load theme's textdomain
-  `hello_elementor_register_menus` register the theme's default menu location
-  `hello_elementor_add_theme_support` register the various supported features
-  `hello_elementor_add_woocommerce_support` register woocommerce features, including product-gallery zoom, swipe & lightbox features
-  `hello_elementor_register_elementor_locations` register elementor settings
-  `hello_elementor_content_width` set default content width to 800px
-  `hello_elementor_page_title` show\hide page title (default: show)
-  `hello_elementor_viewport_content` modify `content` of `viewport` meta in header

### Hello's Changelog
https://github.com/elementor/hello-theme#changelog
