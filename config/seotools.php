<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => env('APP_NAME'), // set false to total remove
            'titleBefore'  => env('APP_NAME'), // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'نقل الأثاث داخل وخارج الرياض فك وتغليف ونقل وتركيب دون أى خدش للأثاث ونقدم لكم أفضل الأسعار والخصومات نحن فى شركة القطبان يسعدنا دائماً أن نقدم اكم أفضل خدمات التنظيف والتعقييم ونقل الأثاث والشحن الدولي داخل وخارج الرياض لدينا فريق متخصص.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['نقل عفش،نقل الاثاث،نقل اثاث،نقل عفش بالرياض،نقل اثاث بالرياض،نقل البضائع با الرياض،نقل مكاتب،نقل داخل وخارج،شركه نقل،لاثاث،بالرياض،شركه نقل العفش،شركه نقل البضائع،شرا لاثاث المستعمل،شراء عفش،شراء غرف نوم،بيع غرف نوم'],
            'canonical'    => env('app_url'), // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => 'نقل عفش،نقل الاثاث،نقل اثاث،نقل عفش بالرياض،نقل اثاث بالرياض،نقل البضائع با الرياض،نقل مكاتب،نقل داخل وخارج،شركه نقل،لاثاث،بالرياض،شركه نقل العفش،شركه نقل البضائع،شرا لاثاث المستعمل،شراء عفش،شراء غرف نوم،بيع غرف نوم',
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
            'title'       => env('APP_NAME'), // set false to total remove
            'description' => 'نقل الأثاث داخل وخارج الرياض فك وتغليف ونقل وتركيب دون أى خدش للأثاث ونقدم لكم أفضل الأسعار والخصومات نحن فى شركة القطبان يسعدنا دائماً أن نقدم اكم أفضل خدمات التنظيف والتعقييم ونقل الأثاث والشحن الدولي داخل وخارج الرياض لدينا فريق متخصص.', // set false to total remove
            'url'         => env('APP_URL'), // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => env('APP_NAME'),
            'images'      => ['https://alqubttan.com//website/assets/images/logo.png' /*image*/],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'site'        => '@twitter',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => env('APP_NAME'), // set false to total remove
            'description' => 'نقل الأثاث داخل وخارج الرياض فك وتغليف ونقل وتركيب دون أى خدش للأثاث ونقدم لكم أفضل الأسعار والخصومات نحن فى شركة القطبان يسعدنا دائماً أن نقدم اكم أفضل خدمات التنظيف والتعقييم ونقل الأثاث والشحن الدولي داخل وخارج الرياض لدينا فريق متخصص.', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => ['https://alqubttan.com//website/assets/images/logo.png'],
        ],
    ],
];
