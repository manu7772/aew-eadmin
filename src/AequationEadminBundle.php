<?php
namespace Aequation\EadminBundle;

use Aequation\WireBundle\Tools\Files;
use Exception;
// Symfony
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AequationEadminBundle extends Bundle
{

    public static function getPackagePath(
        ?string $path = null,
        int $level = 1,
        bool $directory_separator = false
    ): string
    {
        $base = \dirname(__DIR__, $level);
        $new_path = Files::addPath($base, $path).($directory_separator ? DIRECTORY_SEPARATOR : '');
        if(!@file_exists($new_path)) {
            $message = vsprintf('Error %s line %d: path "%s" not found! (searched with base "%s" and added path "%s").', [__METHOD__, __LINE__, $new_path, $base, $path]);
            throw new Exception($message);
        } else {
            // $message = vsprintf('Info %s line %d: path "%s" found! (searched with base "%s" and added path "%s").', [__METHOD__, __LINE__, $new_path, $base, $path]);
            // dump($message);
        }
        return $new_path;
    }

    public function getPath(): string
    {
        return static::getPackagePath();
    }

    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new AequationEadminCompilerPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 1);
        parent::build($container);
    }

}