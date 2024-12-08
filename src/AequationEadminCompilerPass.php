<?php
namespace Aequation\EadminBundle;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class AequationEadminCompilerPass implements CompilerPassInterface
{

    public function Process(
        ContainerBuilder $container
    ): void
    {
        // Process...
    }


}