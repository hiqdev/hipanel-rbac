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
            'have-goods',
            'role:ticket.user',
            'role:domain.user',
            'domain.pay',
            'domain.push',
            'role:certificate.user',
            'certificate.pay',
            'certificate.push',
            'role:contact.user',
            'role:document.user',
            'client.read',
            'role:server.user',
            'server.pay',
            'role:account.user',
            'bill.read',
            'plan.read',
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
            'role:certificate.user',
            'contact.read',
            'role:server.user',
            'role:account.user',
            'plan.read',
        ],
    ],
    'role:admin' => [
        'type' => 1,
        'children' => [
            'role:support',
            'admin',
            'role:stock.manager',
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
            'role:certificate.manager',
            'certificate.pay',
            'certificate.push',
            'role:contact.user',
            'contact.force-verify',
            'role:client.manager',
            'role:plan.manager',
            'bill.read',
            'server.pay',
            'server.sell',
            'mailing.prepare',
            'mailing.send',
        ],
    ],
    'role:reseller' => [
        'type' => 1,
        'children' => [
            'have-goods',
            'deposit',
            'role:manager',
            'role:bill.manager',
            'resell',
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
            'role:contact.user',
            'bill.read',
            'client.read',
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
    'role:certificate.user' => [
        'type' => 1,
        'children' => [
            'certificate.read',
            'certificate.create',
            'certificate.update',
        ],
    ],
    'role:certificate.manager' => [
        'type' => 1,
        'children' => [
            'role:certificate.user',
            'certificate.delete',
        ],
    ],
    'role:contact.user' => [
        'type' => 1,
        'children' => [
            'contact.read',
            'contact.create',
            'contact.update',
            'contact.delete',
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
    'role:client.impersonator' => [
        'type' => 1,
        'children' => [
            'client.impersonate',
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
    'role:plan.manager' => [
        'type' => 1,
        'children' => [
            'plan.read',
            'plan.create',
            'plan.update',
            'plan.delete',
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
    'deny:nothing' => [
        'type' => 2,
    ],
    'restore-password' => [
        'type' => 2,
    ],
    'deny:restore-password' => [
        'type' => 2,
    ],
    'deposit' => [
        'type' => 2,
    ],
    'deny:deposit' => [
        'type' => 2,
    ],
    'have-goods' => [
        'type' => 2,
    ],
    'deny:have-goods' => [
        'type' => 2,
    ],
    'domain.pay' => [
        'type' => 2,
    ],
    'deny:domain.pay' => [
        'type' => 2,
    ],
    'domain.push' => [
        'type' => 2,
    ],
    'deny:domain.push' => [
        'type' => 2,
    ],
    'certificate.pay' => [
        'type' => 2,
    ],
    'deny:certificate.pay' => [
        'type' => 2,
    ],
    'certificate.push' => [
        'type' => 2,
    ],
    'deny:certificate.push' => [
        'type' => 2,
    ],
    'client.read' => [
        'type' => 2,
    ],
    'deny:client.read' => [
        'type' => 2,
    ],
    'server.pay' => [
        'type' => 2,
    ],
    'deny:server.pay' => [
        'type' => 2,
    ],
    'bill.read' => [
        'type' => 2,
    ],
    'deny:bill.read' => [
        'type' => 2,
    ],
    'plan.read' => [
        'type' => 2,
    ],
    'deny:plan.read' => [
        'type' => 2,
    ],
    'access-subclients' => [
        'type' => 2,
    ],
    'deny:access-subclients' => [
        'type' => 2,
    ],
    'support' => [
        'type' => 2,
    ],
    'deny:support' => [
        'type' => 2,
    ],
    'contact.read' => [
        'type' => 2,
    ],
    'deny:contact.read' => [
        'type' => 2,
    ],
    'admin' => [
        'type' => 2,
    ],
    'deny:admin' => [
        'type' => 2,
    ],
    'manage' => [
        'type' => 2,
    ],
    'deny:manage' => [
        'type' => 2,
    ],
    'contact.force-verify' => [
        'type' => 2,
    ],
    'deny:contact.force-verify' => [
        'type' => 2,
    ],
    'server.sell' => [
        'type' => 2,
    ],
    'deny:server.sell' => [
        'type' => 2,
    ],
    'mailing.prepare' => [
        'type' => 2,
    ],
    'deny:mailing.prepare' => [
        'type' => 2,
    ],
    'mailing.send' => [
        'type' => 2,
    ],
    'deny:mailing.send' => [
        'type' => 2,
    ],
    'resell' => [
        'type' => 2,
    ],
    'deny:resell' => [
        'type' => 2,
    ],
    'own' => [
        'type' => 2,
    ],
    'deny:own' => [
        'type' => 2,
    ],
    'employee.read' => [
        'type' => 2,
    ],
    'deny:employee.read' => [
        'type' => 2,
    ],
    'domain.read' => [
        'type' => 2,
    ],
    'deny:domain.read' => [
        'type' => 2,
    ],
    'domain.update' => [
        'type' => 2,
    ],
    'deny:domain.update' => [
        'type' => 2,
    ],
    'domain.delete' => [
        'type' => 2,
    ],
    'deny:domain.delete' => [
        'type' => 2,
    ],
    'domain.freeze' => [
        'type' => 2,
    ],
    'deny:domain.freeze' => [
        'type' => 2,
    ],
    'domain.unfreeze' => [
        'type' => 2,
    ],
    'deny:domain.unfreeze' => [
        'type' => 2,
    ],
    'domain.force-push' => [
        'type' => 2,
    ],
    'deny:domain.force-push' => [
        'type' => 2,
    ],
    'certificate.read' => [
        'type' => 2,
    ],
    'deny:certificate.read' => [
        'type' => 2,
    ],
    'certificate.create' => [
        'type' => 2,
    ],
    'deny:certificate.create' => [
        'type' => 2,
    ],
    'certificate.update' => [
        'type' => 2,
    ],
    'deny:certificate.update' => [
        'type' => 2,
    ],
    'certificate.delete' => [
        'type' => 2,
    ],
    'deny:certificate.delete' => [
        'type' => 2,
    ],
    'contact.create' => [
        'type' => 2,
    ],
    'deny:contact.create' => [
        'type' => 2,
    ],
    'contact.update' => [
        'type' => 2,
    ],
    'deny:contact.update' => [
        'type' => 2,
    ],
    'contact.delete' => [
        'type' => 2,
    ],
    'deny:contact.delete' => [
        'type' => 2,
    ],
    'account.read' => [
        'type' => 2,
    ],
    'deny:account.read' => [
        'type' => 2,
    ],
    'account.create' => [
        'type' => 2,
    ],
    'deny:account.create' => [
        'type' => 2,
    ],
    'account.update' => [
        'type' => 2,
    ],
    'deny:account.update' => [
        'type' => 2,
    ],
    'account.delete' => [
        'type' => 2,
    ],
    'deny:account.delete' => [
        'type' => 2,
    ],
    'server.read' => [
        'type' => 2,
    ],
    'deny:server.read' => [
        'type' => 2,
    ],
    'server.create' => [
        'type' => 2,
    ],
    'deny:server.create' => [
        'type' => 2,
    ],
    'server.update' => [
        'type' => 2,
    ],
    'deny:server.update' => [
        'type' => 2,
    ],
    'server.delete' => [
        'type' => 2,
    ],
    'deny:server.delete' => [
        'type' => 2,
    ],
    'ticket.read' => [
        'type' => 2,
    ],
    'deny:ticket.read' => [
        'type' => 2,
    ],
    'ticket.create' => [
        'type' => 2,
    ],
    'deny:ticket.create' => [
        'type' => 2,
    ],
    'ticket.answer' => [
        'type' => 2,
    ],
    'deny:ticket.answer' => [
        'type' => 2,
    ],
    'ticket.close' => [
        'type' => 2,
    ],
    'deny:ticket.close' => [
        'type' => 2,
    ],
    'ticket.update' => [
        'type' => 2,
    ],
    'deny:ticket.update' => [
        'type' => 2,
    ],
    'ticket.delete' => [
        'type' => 2,
    ],
    'deny:ticket.delete' => [
        'type' => 2,
    ],
    'client.create' => [
        'type' => 2,
    ],
    'deny:client.create' => [
        'type' => 2,
    ],
    'client.update' => [
        'type' => 2,
    ],
    'deny:client.update' => [
        'type' => 2,
    ],
    'client.delete' => [
        'type' => 2,
    ],
    'deny:client.delete' => [
        'type' => 2,
    ],
    'employee.create' => [
        'type' => 2,
    ],
    'deny:employee.create' => [
        'type' => 2,
    ],
    'employee.update' => [
        'type' => 2,
    ],
    'deny:employee.update' => [
        'type' => 2,
    ],
    'employee.delete' => [
        'type' => 2,
    ],
    'deny:employee.delete' => [
        'type' => 2,
    ],
    'client.impersonate' => [
        'type' => 2,
    ],
    'deny:client.impersonate' => [
        'type' => 2,
    ],
    'bill.create' => [
        'type' => 2,
    ],
    'deny:bill.create' => [
        'type' => 2,
    ],
    'bill.update' => [
        'type' => 2,
    ],
    'deny:bill.update' => [
        'type' => 2,
    ],
    'bill.delete' => [
        'type' => 2,
    ],
    'deny:bill.delete' => [
        'type' => 2,
    ],
    'plan.create' => [
        'type' => 2,
    ],
    'deny:plan.create' => [
        'type' => 2,
    ],
    'plan.update' => [
        'type' => 2,
    ],
    'deny:plan.update' => [
        'type' => 2,
    ],
    'plan.delete' => [
        'type' => 2,
    ],
    'deny:plan.delete' => [
        'type' => 2,
    ],
    'part.read' => [
        'type' => 2,
    ],
    'deny:part.read' => [
        'type' => 2,
    ],
    'part.create' => [
        'type' => 2,
    ],
    'deny:part.create' => [
        'type' => 2,
    ],
    'part.update' => [
        'type' => 2,
    ],
    'deny:part.update' => [
        'type' => 2,
    ],
    'part.delete' => [
        'type' => 2,
    ],
    'deny:part.delete' => [
        'type' => 2,
    ],
    'move.read' => [
        'type' => 2,
    ],
    'deny:move.read' => [
        'type' => 2,
    ],
    'move.create' => [
        'type' => 2,
    ],
    'deny:move.create' => [
        'type' => 2,
    ],
    'move.update' => [
        'type' => 2,
    ],
    'deny:move.update' => [
        'type' => 2,
    ],
    'move.delete' => [
        'type' => 2,
    ],
    'deny:move.delete' => [
        'type' => 2,
    ],
    'model.read' => [
        'type' => 2,
    ],
    'deny:model.read' => [
        'type' => 2,
    ],
    'model.create' => [
        'type' => 2,
    ],
    'deny:model.create' => [
        'type' => 2,
    ],
    'model.update' => [
        'type' => 2,
    ],
    'deny:model.update' => [
        'type' => 2,
    ],
    'model.delete' => [
        'type' => 2,
    ],
    'deny:model.delete' => [
        'type' => 2,
    ],
    'document.read' => [
        'type' => 2,
    ],
    'deny:document.read' => [
        'type' => 2,
    ],
    'document.create' => [
        'type' => 2,
    ],
    'deny:document.create' => [
        'type' => 2,
    ],
    'document.update' => [
        'type' => 2,
    ],
    'deny:document.update' => [
        'type' => 2,
    ],
    'document.delete' => [
        'type' => 2,
    ],
    'deny:document.delete' => [
        'type' => 2,
    ],
    'document.generate' => [
        'type' => 2,
    ],
    'deny:document.generate' => [
        'type' => 2,
    ],
    'document.generate-all' => [
        'type' => 2,
    ],
    'deny:document.generate-all' => [
        'type' => 2,
    ],
    'test.beta' => [
        'type' => 2,
    ],
    'deny:test.beta' => [
        'type' => 2,
    ],
    'test.alpha' => [
        'type' => 2,
    ],
    'deny:test.alpha' => [
        'type' => 2,
    ],
];
