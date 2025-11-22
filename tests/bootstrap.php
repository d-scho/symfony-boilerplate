<?php

declare(strict_types=1);

use Symfony\Component\Dotenv\Dotenv;

new Dotenv()
    ->bootEnv(__DIR__ . '/../.env')
;
