<?php
return [
    'temp_user' => [
        'type' => 1,
        'ruleName' => 'userGroup',
    ],
    'user' => [
        'type' => 1,
        'ruleName' => 'userGroup',
    ],
    'admin' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'user',
        ],
    ],
];
