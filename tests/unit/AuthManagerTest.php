<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2020, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac\tests\unit;

use hipanel\rbac\AuthManager;

/**
 * AuthManagerTest class.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class AuthManagerTest extends \PHPUnit\Framework\TestCase
{
    use CheckAccessTrait;

    /**
     * @var AuthManager
     */
    protected $auth;

    protected function setUp(): void
    {
        $this->auth = $this->createObject(AuthManager::class);

        $this->setAssignments();
    }

    protected function createObject($config)
    {
        return class_exists('Yii') ? \Yii::createObject($config) : \yii\helpers\Yii::createObject($config);
    }

    public function testIsRoleInternal(): void
    {
        $expectedInternalItems = [
            // Permissions
            'server.create',
            'server.delete',
            'server.update',
            'server.assign-hub',
            'bill.charges.read',
            'bill.see-server-charges',
            'hub.create',
            'hub.update',
            'hub.delete',
            'consumption.update',
            'consumption.delete',
            'consumption.read-all',
            'ref.view.not-used',
            'part.read-all-hierarchy',
            'client.set-description',
            'move.read-all',
            'move.get-directions',
            'move.create',
            'pnl.read',
            'pnl.read-expenses',
            'pnl.update',
            'order.read',
            'order.create',
            'order.delete',
            'order.read-profits',
            'order.update',
            'employee.create',
            'employee.delete',
            'employee.read',
            'employee.update',
            'blacklist.create',
            'blacklist.delete',
            'blacklist.read',
            'blacklist.update',
            'audit.read',
            'audit.read_everything',
            'costprice.create',
            'costprice.delete',
            'costprice.read',
            'costprice.update',
            'zone.create',
            'zone.delete',
            'zone.read',
            'zone.update',
            'owner-staff',
            'see-no-mans',

            // Roles
            'role:employee.manager',
            'role:server.staff-admin',
            'role:bill.staff-manager',
            'role:hub.staff-admin',
            'role:junior-manager',
            'role:server.master',
            'role:hub.admin',
            'role:hub.master',
            'role:consumption.manager',
            'role:consumption.master',
            'role:blacklist.manager',
            'role:zone.manager',
            'role:pnl.master',
            'role:pnl.user',
            'role:costprice.user',
            'role:costprice.manager',
            'role:bill.master',
            'role:part.master',
            'role:move.manager',
            'role:move.master',
            'role:order.user',
            'role:order.manager',
            'role:order.master',
            'role:stock.user',
            'role:stock.admin',
            'role:stock.manager',
            'role:stock.master',
            'role:audit.user',
            'role:audit.master',
            'role:project.user',
            'role:support',
            'role:admin',
            'role:staff-admin',
            'role:staff-manager',
            'role:accounter',
            'role:manager',
            'role:reseller',
            'role:employee',
            'role:master',
            'role:owner',
            'role:superpowers',
            'role:owner-staff',
            'role:almighty',
        ];

        $actualInternalItems = [];
        foreach ($this->auth->getAllItems() as $item) {
            if ($this->auth->isItemInternal($item)) {
                $actualInternalItems[] = $item->name;
            }
        }

        $this->assertEqualsCanonicalizing($expectedInternalItems, $actualInternalItems);
    }
}
