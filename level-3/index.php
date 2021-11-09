<?php declare(strict_types = 1);

include_once 'vendor/autoload.php';

$content = [
    'title' => 'Lorem Ipsum',
    'box' => [
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipis scing elit. Pellentesque ac nisi felis. Suspendisse ut
        finibus augue.',
        'cta_button_label' => 'Button',
        'modal' => [
            'button_cancel' => 'no',
            'button_agree' => 'yes',
        ],
        'images_default' => [
            'medium' => [
                'url' => 'assets/images/sean-o-KMn4VEeEPR8-unsplash_1_s6zmfh_c_scale,w_784.jpg'
            ],
            'small' => [
                'url' => 'assets/images/sean-o-KMn4VEeEPR8-unsplash_1_s6zmfh_ar_16_9,c_fill,g_auto__c_scale,w_596.jpg'
            ],
        ]
    ]
];

$loader = new \Twig\Loader\FilesystemLoader('./views');
$twig = new \Twig\Environment($loader);

echo $twig->render('pages/index.html', $content);