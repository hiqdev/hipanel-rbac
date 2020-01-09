<?php

namespace hipanel\rbac\console;

final class PermissionDescriptionGenerator
{
    /**
     * @var string
     */
    private $module;
    /**
     * @var string
     */
    private $operation;
    /**
     * @var string
     */
    private $rawName;
    /**
     * @var bool
     */
    private $allows;

    public function __invoke(string $name): string
    {
        $this->parse($name);

        return strtr('{allowance}{operation}', [
            '{allowance}' => $this->formatAllowance(),
            '{operation}' => $this->formatOperation(),
        ]);
    }

    private function parse(string $name): void
    {
        $this->module = null;
        $this->rawName = $name;
        $this->allows = strpos($name, 'deny:') === false;
        if (!$this->allows) {
            [, $name] = explode(':', $name, 2);
        }
        $this->operation = $name;
        if (strpos($name, '.') !== false) {
            [$this->module, $this->operation] = explode('.', $name, 2);
        }
    }

    private function formatAllowance(): string
    {
        if (!$this->allows) {
            return 'Prohibits ';
        }

        return 'Allows ';
    }

    private function formatOperation(): string
    {
        if (preg_match('/^[a-z]+$/', $this->operation)) {
            $exceptions = [
                'createing' => 'creating',
                'updateing' => 'updating',
                'deleteing' => 'deleting',
            ];

            $result = strtr($this->operation . 'ing', $exceptions);

            if ($this->module) {
                return $result . ' of the ' . $this->module;
            }

            return $result;
        }

        if ($this->module) {
            return $this->operation . ' operation on the ' . $this->module;
        }

        return $this->operation . ' operation';
    }
}
