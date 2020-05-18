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

use hipanel\rbac\AuthManager;
use hipanel\rbac\RbacIniterInterface;
use Laminas\Code\Generator\FileGenerator;
use Laminas\Code\Generator\ValueGenerator;

final class MetadataGenerator
{
    /**
     * @var AuthManager
     */
    private $auth;
    /**
     * @var RbacIniterInterface
     */
    private $initer;

    public function __construct(AuthManager $authManager, RbacIniterInterface $initer)
    {
        $this->auth = $authManager;
        $this->initer = $initer;
    }

    public function dump(string $path): void
    {
        $metadata = $this->initer->getMetadata();
        $this->generateRoleDescriptions($metadata);
        $this->generatePermissionsDescriptions($metadata);

        $generator = FileGenerator::fromArray([
            'body' => 'return ' . (new ValueGenerator($metadata, ValueGenerator::TYPE_ARRAY_SHORT))->generate() . ';',
        ]);
        file_put_contents($path, $generator->generate(), LOCK_EX);
    }

    private function generateRoleDescriptions(array &$metadata): void
    {
        $descriptor = new RoleDescriptionGenerator();
        foreach ($this->auth->getRoles() as $name => $role) {
            if (isset($metadata[$name])) {
                continue;
            }

            $metadata[$name] = ['description' => $descriptor($name)];
        }
    }

    private function generatePermissionsDescriptions(array &$metadata): void
    {
        $descriptor = new PermissionDescriptionGenerator();
        $permissions = $this->auth->getPermissions();
        ksort($permissions);
        foreach ($permissions as $name => $permission) {
            if (isset($metadata[$name])) {
                continue;
            }

            $metadata[$name] = ['description' => $descriptor($name)];
        }
    }
}
