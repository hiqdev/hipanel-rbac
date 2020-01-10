<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2019, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac\console;

use hipanel\rbac\AbstractIniter;
use hipanel\rbac\AuthManager;
use hipanel\rbac\RbacIniterInterface;
use hiqdev\yii\compat\yii;
use yii\base\Module;
use yii\helpers\Console;

/**
 * Class RbacController.
 *
 * Usage: `hidev rbac/init`
 */
class RbacController extends \yii\console\Controller
{
    /**
     * @var RbacIniterInterface|AbstractIniter
     */
    protected $initer;

    public function __construct($id, Module $module, RbacIniterInterface $initer, $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->initer = $initer;
    }

    public $defaultAction = 'show';

    public function actionInit()
    {
        $auth = yii::getApp()->get('authManager');
        $this->initer->init($auth);
        $this->stdout('Consider running rbac/generate-descriptions to generate default role descriptions', Console::FG_YELLOW);
    }

    public function actionReinit()
    {
        $auth = yii::getApp()->get('authManager');
        $this->initer->reinit($auth);

        $path = dirname(__DIR__) . '/files/source/metadata.php';
        (new MetadataGenerator($auth, $this->initer))->dump($path);

        $this->initer->reinit($auth); // Reinit using newly generated descriptions
    }

    public function actionShow()
    {
        $auth = yii::getApp()->get('authManager');

        echo "Permissions:\n";
        $permissions = $auth->getPermissions();
        ksort($permissions);
        foreach ($permissions as $name => $perm) {
            echo "   $perm->name – $perm->description\n";
        }

        echo "Roles:\n";
        foreach ($auth->getRoles() as $name => $role) {
            $children = implode(', ', array_keys($auth->getChildren($name)));
            printf("   %-12s\n        %s\n\n", "$role->name – $role->description", $children);
        }

        echo "Assignments:\n";
        foreach ($auth->getAllAssignments() as $userId => $roles) {
            $roles = implode(', ', array_keys($roles));
            printf("   %-12s %s\n", "$userId:", $roles);
        }
    }

    public function actionGenerateDescriptions()
    {
        /** @var AuthManager $auth */
        $auth = yii::getApp()->get('authManager');

        $path = dirname(__DIR__) . '/files/source/metadata.php';
        (new MetadataGenerator($auth, $this->initer))->dump($path);

        $this->initer->reinit($auth);
    }

    public function actionPlantuml()
    {
        $path = dirname(__DIR__, 2) . '/docs/test.txt';

        $auth = yii::getApp()->get('authManager');
        $plant = new PlantUML($auth);

        $uml = $plant->build();

        file_put_contents($path, $uml);
    }
}
