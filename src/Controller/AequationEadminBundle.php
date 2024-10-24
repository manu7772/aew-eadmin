<?php
namespace Aequation\EadminBundle;

// Symfony
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AequationEadminBundle extends Bundle
{

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

}