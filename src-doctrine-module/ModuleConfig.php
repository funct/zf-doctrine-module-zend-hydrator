<?php

namespace DoctrineModule\Stdlib\Hydrator;

class ModuleConfig
{
    public function __invoke()
    {
        return require __DIR__ . '/../config/module.config.php';
    }
}
