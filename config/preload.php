<?php

declare(strict_types=1);

/**
 * Supported since 7.4 - file has to be added to php.ini.
 *
 * @see https://symfony.com/blog/php-preloading-and-symfony
 */
if (file_exists(dirname(__DIR__) . '/var/cache/prod/App_KernelProdContainer.preload.php')) {
    require dirname(__DIR__) . '/var/cache/prod/App_KernelProdContainer.preload.php';
}
