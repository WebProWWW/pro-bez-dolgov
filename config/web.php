<?php

use yii\helpers\ArrayHelper;

return ArrayHelper::merge([
    'components' => [
        'request' => [
            'cookieValidationKey' => 'YQZrWHI8giRkeAmrQ4ZvdIXvczvU_ijT',
            'parsers' => [ 'application/json' => 'yii\web\JsonParser' ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'pattern' => '/<view:[\w\-]+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '/novosti-po-bankrotstvu/<alias:[\w\-]+>-<id:[\w\-]+>',
                    'route' => 'site/news-item',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '/poleznye-materialy-po-bankrotstvu/<alias:[\w\-]+>',
                    'route' => 'site/material',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '/zakon-o-bankrotstve/<alias:[\w\-]+>',
                    'route' => 'site/law',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '/rejting-kompanij-po-bankrotstvu/<alias:[\w\-]+>',
                    'route' => 'site/company',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '/fssp-search',
                    'route' => 'site/fssp-search',
                    'suffix' => '.json',
                ],
                [
                    'pattern' => '/callback',
                    'route' => 'site/callback',
                    'suffix' => '.json',
                ],
                [
                    'pattern' => '/send-file',
                    'route' => 'site/send-file',
                    'suffix' => '.json',
                ],
                '' => 'site/index',
            ],
        ],
    ],
], require __DIR__ . '/dev.php');