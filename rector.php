<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Catch_\ThrowWithPreviousExceptionRector;
use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Php81\Rector\Property\ReadOnlyPropertyRector;
use Rector\Php82\Rector\Class_\ReadOnlyClassRector;
use Rector\Php83\Rector\ClassConst\AddTypeToConstRector;
use Rector\PHPUnit\CodeQuality\Rector\Class_\PreferPHPUnitSelfCallRector;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Symfony\Symfony43\Rector\MethodCall\WebTestCaseAssertIsSuccessfulRector;
use Rector\Symfony\Symfony43\Rector\MethodCall\WebTestCaseAssertResponseCodeRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/bin',
        __DIR__ . '/config',
        __DIR__ . '/public/index.php',
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/.php-cs-fixer.php',
        __DIR__ . '/rector.php',
    ])
    ->withAttributesSets(symfony: true, phpunit: true)
    ->withSets([
        PHPUnitSetList::PHPUNIT_120,
        PHPUnitSetList::PHPUNIT_CODE_QUALITY,
    ])
    ->withComposerBased(phpunit: true, symfony: true)
    ->withRules([
        ReadOnlyPropertyRector::class,
        ReadOnlyClassRector::class,
        AddTypeToConstRector::class,
        ThrowWithPreviousExceptionRector::class,
        PreferPHPUnitSelfCallRector::class,
        WebTestCaseAssertIsSuccessfulRector::class,
        WebTestCaseAssertResponseCodeRector::class,
        InlineConstructorDefaultToPropertyRector::class,
    ])
;
