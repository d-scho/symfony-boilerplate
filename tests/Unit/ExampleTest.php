<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\TestCase;

#[CoversNothing]
final class ExampleTest extends TestCase
{
    public function test_example(): void
    {
        self::assertTrue(true); // @phpstan-ignore staticMethod.alreadyNarrowedType
    }
}
