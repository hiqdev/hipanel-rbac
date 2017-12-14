<?php
return [
    'role:nobody' => [
        'type' => 1,
        'children' => [
            'nothing',
        ],
    ],
    'role:unauthorized' => [
        'type' => 1,
        'children' => [
            'restore-password',
            'deposit',
        ],
    ],
    'role:client' => [
        'type' => 1,
        'children' => [
            'role:unauthorized',
            'role:ticket.user',
            'role:domain.user',
            'domain.pay',
            'domain.push',
            'role:server.user',
            'server.pay',
            'role:account.user',
            'bill.read',
        ],
    ],
    'role:support' => [
        'type' => 1,
        'children' => [
            'access-subclients',
            'support',
            'role:ticket.manager',
            'role:client.support',
            'role:domain.user',
            'role:server.user',
            'role:account.user',
        ],
    ],
    'role:admin' => [
        'type' => 1,
        'children' => [
            'role:support',
            'admin',
            'role:server.admin',
        ],
    ],
    'role:manager' => [
        'type' => 1,
        'children' => [
            'role:support',
            'manage',
            'role:document.manager',
            'role:stock.manager',
            'role:domain.manager',
            'domain.pay',
            'domain.push',
            'role:client.manager',
            'bill.read',
            'server.pay',
            'server.sell',
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
    'role:employee' => [
        'type' => 1,
        'children' => [
            'restore-password',
            'deposit',
            'bill.read',
            'employee.read',
        ],
    ],
    'role:domain.user' => [
        'type' => 1,
        'children' => [
            'domain.read',
            'domain.update',
        ],
    ],
    'role:domain.manager' => [
        'type' => 1,
        'children' => [
            'role:domain.user',
            'domain.delete',
        ],
    ],
    'role:domain.master' => [
        'type' => 1,
        'children' => [
            'role:domain.manager',
            'domain.freeze',
            'domain.unfreeze',
            'domain.push',
            'domain.force-push',
        ],
    ],
    'role:account.user' => [
        'type' => 1,
        'children' => [
            'account.read',
            'account.create',
            'account.update',
            'account.delete',
        ],
    ],
    'role:server.user' => [
        'type' => 1,
        'children' => [
            'server.read',
        ],
    ],
    'role:server.admin' => [
        'type' => 1,
        'children' => [
            'role:server.user',
            'server.create',
            'server.update',
            'server.delete',
        ],
    ],
    'role:ticket.user' => [
        'type' => 1,
        'children' => [
            'ticket.read',
            'ticket.create',
            'ticket.answer',
            'ticket.close',
        ],
    ],
    'role:ticket.manager' => [
        'type' => 1,
        'children' => [
            'role:ticket.user',
            'ticket.update',
            'ticket.delete',
        ],
    ],
    'role:client.support' => [
        'type' => 1,
        'children' => [
            'client.read',
        ],
    ],
    'role:client.manager' => [
        'type' => 1,
        'children' => [
            'role:client.support',
            'client.create',
            'client.update',
            'client.delete',
        ],
    ],
    'role:employee.manager' => [
        'type' => 1,
        'children' => [
            'employee.read',
            'employee.create',
            'employee.update',
            'employee.delete',
        ],
    ],
    'role:bill.manager' => [
        'type' => 1,
        'children' => [
            'bill.read',
            'bill.create',
            'bill.update',
            'bill.delete',
        ],
    ],
    'role:stock.manager' => [
        'type' => 1,
        'children' => [
            'part.read',
            'part.create',
            'part.update',
            'part.delete',
            'move.read',
            'move.create',
            'move.update',
            'move.delete',
            'model.read',
            'model.create',
            'model.update',
            'model.delete',
        ],
    ],
    'role:document.user' => [
        'type' => 1,
        'children' => [
            'document.read',
            'document.create',
        ],
    ],
    'role:document.manager' => [
        'type' => 1,
        'children' => [
            'role:document.user',
            'document.update',
            'document.delete',
            'document.generate',
        ],
    ],
    'role:document.master' => [
        'type' => 1,
        'children' => [
            'document.generate-all',
        ],
    ],
    'role:beta-tester' => [
        'type' => 1,
        'children' => [
            'test.beta',
        ],
    ],
    'role:alpha-tester' => [
        'type' => 1,
        'children' => [
            'role:beta-tester',
            'test.alpha',
        ],
    ],
    'nothing' => [
        'type' => 2,
    ],
    'restore-password' => [
        'type' => 2,
    ],
    'deposit' => [
        'type' => 2,
    ],
    'domain.pay' => [
        'type' => 2,
    ],
    'domain.push' => [
        'type' => 2,
    ],
    'server.pay' => [
        'type' => 2,
    ],
    'bill.read' => [
        'type' => 2,
    ],
    'access-subclients' => [
        'type' => 2,
    ],
    'support' => [
        'type' => 2,
    ],
    'admin' => [
        'type' => 2,
    ],
    'manage' => [
        'type' => 2,
    ],
    'server.sell' => [
        'type' => 2,
    ],
    'contact.force-verify' => [
        'type' => 2,
    ],
    'mailing.prepare' => [
        'type' => 2,
    ],
    'mailing.send' => [
        'type' => 2,
    ],
    'resell' => [
        'type' => 2,
    ],
    'own' => [
        'type' => 2,
    ],
    'employee.read' => [
        'type' => 2,
    ],
    'domain.read' => [
        'type' => 2,
    ],
    'domain.update' => [
        'type' => 2,
    ],
    'domain.delete' => [
        'type' => 2,
    ],
    'domain.freeze' => [
        'type' => 2,
    ],
    'domain.unfreeze' => [
        'type' => 2,
    ],
    'domain.force-push' => [
        'type' => 2,
    ],
    'account.read' => [
        'type' => 2,
    ],
    'account.create' => [
        'type' => 2,
    ],
    'account.update' => [
        'type' => 2,
    ],
    'account.delete' => [
        'type' => 2,
    ],
    'server.read' => [
        'type' => 2,
    ],
    'server.create' => [
        'type' => 2,
    ],
    'server.update' => [
        'type' => 2,
    ],
    'server.delete' => [
        'type' => 2,
    ],
    'ticket.read' => [
        'type' => 2,
    ],
    'ticket.create' => [
        'type' => 2,
    ],
    'ticket.answer' => [
        'type' => 2,
    ],
    'ticket.close' => [
        'type' => 2,
    ],
    'ticket.update' => [
        'type' => 2,
    ],
    'ticket.delete' => [
        'type' => 2,
    ],
    'client.read' => [
        'type' => 2,
    ],
    'client.create' => [
        'type' => 2,
    ],
    'client.update' => [
        'type' => 2,
    ],
    'client.delete' => [
        'type' => 2,
    ],
    'employee.create' => [
        'type' => 2,
    ],
    'employee.update' => [
        'type' => 2,
    ],
    'employee.delete' => [
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
    'part.read' => [
        'type' => 2,
    ],
    'part.create' => [
        'type' => 2,
    ],
    'part.update' => [
        'type' => 2,
    ],
    'part.delete' => [
        'type' => 2,
    ],
    'move.read' => [
        'type' => 2,
    ],
    'move.create' => [
        'type' => 2,
    ],
    'move.update' => [
        'type' => 2,
    ],
    'move.delete' => [
        'type' => 2,
    ],
    'model.read' => [
        'type' => 2,
    ],
    'model.create' => [
        'type' => 2,
    ],
    'model.update' => [
        'type' => 2,
    ],
    'model.delete' => [
        'type' => 2,
    ],
    'document.read' => [
        'type' => 2,
    ],
    'document.create' => [
        'type' => 2,
    ],
    'document.update' => [
        'type' => 2,
    ],
    'document.delete' => [
        'type' => 2,
    ],
    'document.generate' => [
        'type' => 2,
    ],
    'document.generate-all' => [
        'type' => 2,
    ],
    'test.beta' => [
        'type' => 2,
    ],
    'test.alpha' => [
        'type' => 2,
    ],
];
