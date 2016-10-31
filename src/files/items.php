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
            'do-support',
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
            'billManager',
            'resell',
            'deposit',
        ],
    ],
    'owner' => [
        'type' => 1,
        'children' => [
            'billManager',
            'resell',
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
    'billCreator' => [
        'type' => 1,
        'children' => [
            'create-bills',
        ],
    ],
    'billDeleter' => [
        'type' => 1,
        'children' => [
            'delete-bills',
        ],
    ],
    'billManager' => [
        'type' => 1,
        'children' => [
            'manager',
            'create-bills',
            'update-bills',
            'delete-bills',
        ],
    ],
    'restore-password' => [
        'type' => 2,
    ],
    'deposit' => [
        'type' => 2,
    ],
    'do-support' => [
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
    'freeze' => [
        'type' => 2,
    ],
    'unfreeze' => [
        'type' => 2,
    ],
    'create-bills' => [
        'type' => 2,
    ],
    'update-bills' => [
        'type' => 2,
    ],
    'delete-bills' => [
        'type' => 2,
    ],
];
