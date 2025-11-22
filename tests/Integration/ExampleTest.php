<?php

declare(strict_types=1);

namespace Tests\Integration;

use App\Kernel;
use PHPUnit\Framework\Attributes\CoversNothing;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

#[CoversNothing]
final class ExampleTest extends KernelTestCase
{
    public function test_example(): void
    {
        self::assertInstanceOf(Kernel::class, self::getContainer()->get(Kernel::class));  // @phpstan-ignore staticMethod.alreadyNarrowedType
    }
}
