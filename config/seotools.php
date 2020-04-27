<?php
/**
 * @see https://github.com/artesaos/seotools
 */

$title = "Doreaweb Diseño Páginas Web y Hosting en Valledupar";
$description = 'Diseño de páginas web, diseño web, diseño tiendas virtuales, sitios web, hosting web y mas.';
$keywords = ['paginas web', 'diseño web', 'valledupar', 'hosting web', 'tiendas virtuales', 'ecommerce valledupar'];
$images = [asset('img/logo.png')];

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => $title, // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => $description, // set false to total remove
            'separator'    => ' - ',
            'keywords'     => $keywords,
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => $title, // set false to total remove
            'description' => $description, // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'Doreaweb',
            'images'      => $images,
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image',
            'site'        => '@guilleagudelo',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => $title, // set false to total remove
            'description' => $description, // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => $images,
        ],
    ],
];
