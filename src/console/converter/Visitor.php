<?php
declare(strict_types=1);

namespace hipanel\rbac\console\converter;

use PhpParser\Node\Expr\ArrayItem;
use PhpParser\Node\Scalar\String_;
use PhpParser\NodeVisitorAbstract;
use PhpParser\Node;

class Visitor extends NodeVisitorAbstract
{
    /** @var string[]  */
    private array $roles = [];

    /** @var string[]  */
    private array $permissions = [];

    /** @inerhitDoc */
    public function enterNode(Node $node)
    {
        if (!$node instanceof ArrayItem) {
            return;
        }

        if ($node->key instanceof String_) {
            $this->roles[] = $node->key->value;
        }

        if (
            $node->value instanceof String_
            && !in_array($node->value->value, $this->permissions)
            && !strstr($node->value->value, 'role:')
        ) {
            $this->permissions[] = $node->value->value;
        }
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function getPermissions(): array
    {
        return $this->permissions;
    }
}
