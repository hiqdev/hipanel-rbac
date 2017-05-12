<?php
/**
 * RBAC implementation for HiPanel.
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'authManager' => [
            'class' => \hipanel\rbac\AuthManager::class,
        ],
    ],
];
