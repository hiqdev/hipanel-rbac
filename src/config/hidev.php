<?php

/*
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'rbac' => [
                'class' => \hipanel\rbac\console\RbacController::class,
            ],
        ],
        /// TODO move to common
        'authManager' => [
            'class' => \hipanel\rbac\AuthManager::class,
            'itemFile' => '@root/rbac/items.php',
            'ruleFile' => '@root/rbac/rules.php',
            'assignmentFile' => '@root/rbac/assignments.php',
        ],
    ],
];
