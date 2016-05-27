<?php

return [
    'components' => [
        'config' => [
            'rbac' => [
                'class' => \hipanel\rbac\console\RbacController::class,
            ],
        ],
        ### TODO move to common
        'authManager' => [
            'class' => \hipanel\rbac\AuthManager::class,
            'itemFile' => '@root/rbac/items.php',
            'ruleFile' => '@root/rbac/rules.php',
            'assignmentFile' => '@root/rbac/assignments.php',
        ],
    ],
];
