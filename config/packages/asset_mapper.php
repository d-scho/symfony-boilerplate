<?php

declare(strict_types=1);

use Symfony\Config\FrameworkConfig;

return function (FrameworkConfig $config) {
    $assetMapper = $config->assetMapper();

//    $assetMapper->importmapPolyfill(false);
//    $assetMapper->publicPrefix('otherPrefix'); // default is "assets"
    $assetMapper->path('assets', ''); // 1st arg = directory, 2nd arg = public prefix (additionally to the general publicPrefix)
    $assetMapper->missingImportMode('strict'); // when using flex, also configured as 'warn' for prod
};