<?php

$app->on('system.dashboard', function(\Pagekit\Widget\Event\RegisterWidgetEvent $event) use ($app) {
    $event->register('Pagekit\_2048\GameWidget');
});

return [

    'autoload' => [

        'Pagekit\\_2048\\' => 'src'

    ]

];
