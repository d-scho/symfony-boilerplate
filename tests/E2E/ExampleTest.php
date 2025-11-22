<?php

declare(strict_types=1);

namespace Tests\E2E;

use App\MainController;
use PHPUnit\Framework\Attributes\CoversClass;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

#[CoversClass(MainController::class)]
final class ExampleTest extends WebTestCase
{
    public function test_example(): void
    {
        $client = self::createClient();

        $client->request(Request::METHOD_GET, '/');

        self::assertResponseIsSuccessful();
    }
}
