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

use yii\rbac\PhpManager;

class PlantUML
{
    /**
     * @var PhpManager
     */
    protected $auth;

    public function __construct($auth)
    {
        $this->auth = $auth;
    }

    public function build()
    {
        $path = dirname(__DIR__, 2) . '/docs/test.md';

        $header = '@startuml';
        $footer = '@enduml';
        $legend = '
legend right
        |<#FFDDDD>  <b>E</b>  |  <b>Role</b> |
        |<#DDFFDD>  <b>P</b>  |  <b>Permission</b>  |
endlegend
';

        $defs = '
!define Role(name,desc) component "desc" as name << (R,#EEEEEE) >> #FFDDDD
!define Permission(name,desc) () name as "desc" #DDFFDD
hide methods
hide stereotypes
';

        $items = [];
        $links = [];
        $hidds = [];

        $permissions = $this->auth->getPermissions();
        foreach ($permissions as $name => $perm) {
            if ($this->isDeny($name)) {
                continue;
            }

            $id = $this->toId($name);
            $items[] = "Permission($id, \"$name\")";

            if (!empty($old_id)) {
                $hidds[] = "$old_id -[hidden]-> $id";
            }
            $old_id = $id;
        }

        $items[] = '';

        foreach ($this->auth->getRoles() as $parent => $role) {
            $parent_id = $this->toId($parent);

            $items[] = "Role($parent_id, \"$parent\")";
            foreach ($this->auth->getChildren($parent) as $child => $item) {
                $child_id = $this->toId($child);
                $links[] = "$child_id -> $parent_id";
            }
        }

        $items = $this->joinClientOnly($items);
        $links = $this->joinClientOnly($links);
        $hidds = $this->joinClientOnly($hidds);
        $res = implode("\n", [$header, $legend, $defs, $items, '', $links, '', $hidds, '', $footer, '']);

        return $res;
    }

    private function isDeny(string $name): bool
    {
        return strncmp($name, 'deny', 4) === 0;
    }

    private function toId(string $name): string
    {
        return strtr($name, ':.-', '___');
    }

    private function joinClientOnly($arr)
    {
        $res = [];
        foreach ($arr as $str) {
            if (strpos($str, 'client') !== false) {
                $res[] = $str;
            }
        }

        return implode("\n", $res);
    }
}
