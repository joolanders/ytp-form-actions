<?php

require_once __DIR__ . '/src/MyAction/Action.php';
// require_once __DIR__ . '/src/MyOtherAction/Action.php';

use YOOtheme\YOOessentials\MyAction\Action as MyAction;
// use YOOtheme\YOOessentials\MyOtherAction\Action as MyOtherAction;


return [

    // declare my actions
    'yooessentials-form-actions' => [
        MyAction::class => __DIR__ . '/src/MyAction/config.json',
        // MyOtherAction::class => __DIR__ . '/src/MyOtherAction/config.json'
    ]

];
