<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function (ContainerConfigurator $container): void {
    $container
        ->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->load('App\\', '../src/')
    ;
};
