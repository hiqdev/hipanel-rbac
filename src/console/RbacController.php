<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2020, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac\console;

use hipanel\rbac\AbstractIniter;
use hipanel\rbac\console\converter\ConverterInterface;
use hipanel\rbac\RbacIniterInterface;
use yii\base\Module;
use yii\helpers\Console;
use yii\rbac\CheckAccessInterface;

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

    /**
     * @var CheckAccessInterface
     */
    private $auth;

    private ConverterInterface $converter;

    public function __construct(
        $id,
        Module $module,
        RbacIniterInterface $initer,
        ConverterInterface $converter,
        CheckAccessInterface $auth,
        $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->initer = $initer;
        $this->auth = $auth;
        $this->converter = $converter;
    }

    public $defaultAction = 'show';

    public function actionInit()
    {
        $this->initer->init($this->auth);
        $this->converter->convert();
        $this->stdout('Consider running rbac/generate-descriptions to generate default role descriptions', Console::FG_YELLOW);
    }

    public function actionGenerateJs()
    {
        $this->converter->convert();
    }

    public function actionReinit()
    {
        $this->initer->reinit($this->auth);

        $path = dirname(__DIR__) . '/files/source/metadata.php';
        (new MetadataGenerator($this->auth, $this->initer))->dump($path);

        $this->initer->reinit($this->auth); // Reinit using newly generated descriptions

        $this->converter->convert();
    }

    public function actionShow()
    {
        echo "Permissions:\n";
        $permissions = $this->auth->getPermissions();
        ksort($permissions);
        foreach ($permissions as $name => $perm) {
            echo "   $perm->name – $perm->description\n";
        }

        echo "Roles:\n";
        foreach ($this->auth->getRoles() as $name => $role) {
            $children = implode(', ', array_keys($this->auth->getChildren($name)));
            printf("   %-12s\n        %s\n\n", "$role->name – $role->description", $children);
        }

        echo "Assignments:\n";
        foreach ($this->auth->getAllAssignments() as $userId => $roles) {
            $roles = implode(', ', array_keys($roles));
            printf("   %-12s %s\n", "$userId:", $roles);
        }
    }

    public function actionExport()
    {
        $rawps = $this->auth->getPermissions();
        ksort($rawps);
        $perms = [];
        foreach ($rawps as $name => $perm) {
            if (str_starts_with($name, 'deny:')) continue;
            if (strpos($name, '.') !== false) continue;
            $perms[$name] = $perm;
        }

        $roles = $this->auth->getRoles();
        ksort($roles);
        $role2perms = [];
        $perm2roles = [];
        foreach ($roles as $role => $roleObj) {
            $this->auth->setAssignment($role, $role);
            foreach ($perms as $perm => $permObj) {
                if ($this->auth->checkAccess($role, $perm)) {
                    $role2perms[$role][$perm] = $permObj;
                    $perm2roles[$perm][$role] = $roleObj;
                }
            }
        }

        echo "Permissions: ".count($perms)."\n";
        foreach ($perms as $name => $perm) {
            $rs = $perm2roles[$name] ?? [];
            $rn = count($rs);
            $rr = implode(', ', array_keys($rs));
            echo "  $perm->name – $perm->description | $rn: $rr\n\n";
        }
    }

    public function actionGenerateDescriptions()
    {
        $path = dirname(__DIR__) . '/files/source/metadata.php';
        (new MetadataGenerator($this->auth, $this->initer))->dump($path);

        $this->initer->reinit($this->auth);
        $this->converter->convert();
    }

    public function actionPlantuml()
    {
        $path = dirname(__DIR__, 2) . '/docs/test.txt';

        $plant = new PlantUML($this->auth);

        $uml = $plant->build();

        file_put_contents($path, $uml);
    }
}
