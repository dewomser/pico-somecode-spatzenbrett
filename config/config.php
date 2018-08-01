<?php


/*
 * THEME
 */
 $config['twig_config'] = array(              // Twig settings
     'cache' => false,                        // To enable Twig caching change this to a path to a writable directory
     'autoescape' => false,                   // Auto-escape Twig vars
     'debug' => false                        // Enable Twig debug
 );

/*
 * CONTENT
 */
 $config['date_format'] = '%d.%m.%Y';            // Set the PHP date format as described here: http://php.net/manual/en/function.strftime.php
 $config['pages_order_by'] = 'date';         // Order pages by "alpha" or "date"
 $config['pages_order'] = 'asc';              // Order pages "asc" or "desc"

/*
 * TIMEZONE
 */
 $config['timezone'] = 'UTC';                 // Timezone may be required by your php install

/*
 * PLUGINS
 */
 $config['pico_rss.enabled'] = true;      // Force DummyPlugin to be disabled
$config['rewrite_url'] = true;
/*
 * CUSTOM
 */
// $config['custom_setting'] = 'Hello';         // Can be accessed by {{ config.custom_setting }} in a theme
$config['datenschutz'] = 'Datenschutz: Wenn Du Cookies erlaubst, werden sie benutzt! Keine Tracker. Keine nachgeladenen Scripts und Fonts von fremden Seiten. ';
$config['url'] = '/sites/yourtheme';
$config['url_long'] = 'https://nextcloud-webseite/sites/yourtheme';
// von mor hier reingebastelt 11.07.18
