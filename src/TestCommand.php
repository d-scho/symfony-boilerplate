<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:test', description: 'This is a test command')]
final class TestCommand extends Command
{
    protected function configure(): void
    {
        $this->addArgument('input', InputArgument::REQUIRED, 'Any input');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $arg = $input->getArgument('input');
        assert(is_string($arg));

        $output->writeln(sprintf('Input: "%s"', $arg));

        return Command::SUCCESS;
    }
}