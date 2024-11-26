<?php

return [
    'plugins' => [
        'AdminLoginAsUser' => ['namespace' => 'AdminLoginAsUser'],
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'Analytics' => ['namespace' => 'Analytics'],
        'Accessibility',
        'SpamDetector',
        'MapasBlame' => [
            'namespace' => 'MapasBlame',
            'config' => [
                'request.logData.PATCH' => function ($data) {
                    return $data;
                },
            ]
        ],
    ]
];