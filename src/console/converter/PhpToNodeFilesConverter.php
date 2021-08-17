<?php
declare(strict_types=1);

namespace hipanel\rbac\console\converter;

use hipanel\rbac\console\converter\formatter\EnumRowItemBuilder;
use PhpParser\NodeTraverser;
use PhpParser\Parser;
use PhpParser\ParserFactory;
use Throwable;
use yii\helpers\FileHelper;

final class PhpToNodeFilesConverter implements ConverterInterface
{
    private const EXPORT_FILE_NAME = 'index.ts';

    public string $storageDir;

    public string $convertFile;

    private Parser $parser;

    public function __construct()
    {
        $this->parser = (new ParserFactory())
            ->create(ParserFactory::PREFER_PHP7);
    }

    public function convert(): void
    {
        $traverser = new NodeTraverser();
        $visitor = new Visitor();
        $traverser->addVisitor($visitor);

        try {
            $stmts = $this->parser->parse(file_get_contents($this->convertFile));
            $traverser->traverse($stmts);

            $output = TsFileGenerator::fromParts(
                (new TsObjectGenerator('RoleHierarchy', require $this->convertFile))->generate(),
                (new TsEnumGenerator('Role', $visitor->getRoles()))->withRowFormatter(new EnumRowItemBuilder())->generate(),
                (new TsEnumGenerator('Permission', $visitor->getPermissions()))->generate(),
            );

            if (!is_dir($this->storageDir)) {
                FileHelper::createDirectory($this->storageDir);
            }

            $targetFile = $this->storageDir . '/' . self::EXPORT_FILE_NAME;
            file_put_contents($targetFile, $output, LOCK_EX);
        } catch (Throwable $e) {
            echo 'Falied to parse file: ' . $e->getMessage();
        }
    }
}
