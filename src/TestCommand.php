<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:test', description: 'This is a test command')]
final readonly class TestCommand
{
    public function __invoke(
        OutputInterface $output,
        #[Argument(description: 'Any input')]
        string $input,
    ): int {
        $output->writeln(sprintf('Input: "%s"', $input));

        return Command::SUCCESS;
    }
}