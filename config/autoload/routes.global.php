<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
            App\Action\PingAction::class => App\Action\PingAction::class,
        ],
        'factories' => [
            App\Action\HomePageAction::class => App\Action\HomePageFactory::class,
            // link to our custom Action/Factory
            App\Action\HelloAction::class => App\Action\HelloActionFactory::class,
        ],
    ],

    'routes' => [
        // Default routes that came with the installation process.
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => App\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'api.ping',
            'path' => '/api/ping',
            'middleware' => App\Action\PingAction::class,
            'allowed_methods' => ['GET'],
        ],

        // custom
        [
            'name' => 'hello',
            'path' => '/hello',
            'middleware' => App\Action\HelloAction::class,
            'allowed_methods' => ['GET'],
        ]
    ],
];
