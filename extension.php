<?php

$app->on('system.dashboard', function(\Pagekit\Widget\Event\RegisterWidgetEvent $event) use ($app) {
    $event->register('Pagekit\_2048\GameWidget');
});

return array(

    'autoload' => array(

        'Pagekit\\_2048\\' => 'src'

    ),

    'resources' => array(

        'export' => array(
            'view'  => 'views',
            'asset' => 'assets'
        )

    )

);
