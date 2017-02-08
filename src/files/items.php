<?php
return [
    'role:client' => [
        'type' => 1,
        'children' => [
            'restore-password',
            'deposit',
            'domain.pay',
            'server.pay',
        ],
    ],
    'role:support' => [
        'type' => 1,
        'children' => [
            'support',
        ],
    ],
    'role:admin' => [
        'type' => 1,
        'children' => [
            'role:support',
            'admin',
            'contact.force-verify',
        ],
    ],
    'role:manager' => [
        'type' => 1,
        'children' => [
            'role:support',
            'role:document.manager',
            'manage',
            'domain.pay',
            'server.pay',
            'contact.force-verify',
            'mailing.prepare',
            'mailing.send',
        ],
    ],
    'role:reseller' => [
        'type' => 1,
        'children' => [
            'role:manager',
            'role:bill.manager',
            'resell',
            'deposit',
        ],
    ],
    'role:owner' => [
        'type' => 1,
        'children' => [
            'role:manager',
            'role:bill.manager',
            'resell',
            'own',
        ],
    ],
    'role:domain.master' => [
        'type' => 1,
        'children' => [
            'domain.freeze',
            'domain.unfreeze',
            'domain.force-push',
        ],
    ],
    'role:bill.manager' => [
        'type' => 1,
        'children' => [
            'bill.create',
            'bill.update',
            'bill.delete',
        ],
    ],
    'role:document.manager' => [
        'type' => 1,
        'children' => [
            'document.manage',
        ],
    ],
    'restore-password' => [
        'type' => 2,
    ],
    'deposit' => [
        'type' => 2,
    ],
    'support' => [
        'type' => 2,
    ],
    'manage' => [
        'type' => 2,
    ],
    'admin' => [
        'type' => 2,
    ],
    'resell' => [
        'type' => 2,
    ],
    'own' => [
        'type' => 2,
    ],
    'domain.pay' => [
        'type' => 2,
    ],
    'domain.freeze' => [
        'type' => 2,
    ],
    'domain.unfreeze' => [
        'type' => 2,
    ],
    'domain.set-contacts' => [
        'type' => 2,
    ],
    'domain.force-push' => [
        'type' => 2,
    ],
    'document.manage' => [
        'type' => 2,
    ],
    'mailing.prepare' => [
        'type' => 2,
    ],
    'mailing.send' => [
        'type' => 2,
    ],
    'contact.force-verify' => [
        'type' => 2,
    ],
    'server.pay' => [
        'type' => 2,
    ],
    'bill.create' => [
        'type' => 2,
    ],
    'bill.update' => [
        'type' => 2,
    ],
    'bill.delete' => [
        'type' => 2,
    ],
];
