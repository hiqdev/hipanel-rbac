<?php
return [
    'client' => [
        'type' => 1,
        'children' => [
            'restore-password',
            'deposit',
        ],
    ],
    'support' => [
        'type' => 1,
        'children' => [
            'supporting',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'support',
            'administrate',
        ],
    ],
    'manager' => [
        'type' => 1,
        'children' => [
            'support',
            'manage',
        ],
    ],
    'reseller' => [
        'type' => 1,
        'children' => [
            'manager',
            'resell',
        ],
    ],
    'owner' => [
        'type' => 1,
        'children' => [
            'reseller',
            'own',
        ],
    ],
    'freezer' => [
        'type' => 1,
        'children' => [
            'freeze',
            'unfreeze',
        ],
    ],
    'billManager' => [
        'type' => 1,
        'children' => [
            'delete-bills',
            'edit-bills',
        ],
    ],
    'restore-password' => [
        'type' => 2,
    ],
    'deposit' => [
        'type' => 2,
    ],
    'supporting' => [
        'type' => 2,
    ],
    'manage' => [
        'type' => 2,
    ],
    'administrate' => [
        'type' => 2,
    ],
    'resell' => [
        'type' => 2,
    ],
    'own' => [
        'type' => 2,
    ],
    'root' => [
        'type' => 2,
    ],
    'freeze' => [
        'type' => 2,
    ],
    'unfreeze' => [
        'type' => 2,
    ],
    'delete-bills' => [
        'type' => 2,
    ],
    'edit-bills' => [
        'type' => 2,
    ],
];
