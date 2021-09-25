<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class server extends Command
{
    protected $commandName = 'app:greet';
    protected $commandDescription = "Greets Someone";

    protected $commandArgumentName = "name";
    protected $commandArgumentDescription = "Who do you want to greet?";

    protected $commandOptionName = "cap"; // should be specified like "app:greet John --cap"
    protected $commandOptionShortcut = "c" ;
    protected $commandOptionDescription = 'If set, it will greet in uppercase letters';

    protected function configure()
    {
        $this
            ->setName($this->commandName)
            ->setDescription($this->commandDescription)
            ->addArgument(
                $this->commandArgumentName,
                InputArgument::OPTIONAL,
                $this->commandArgumentDescription
            )
            ->addOption(
                $this->commandOptionName,
                $this->commandOptionShortcut,
                InputOption::VALUE_NONE,
                $this->commandOptionDescription
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument($this->commandArgumentName);
        if (is_string($name)) {
            $text = 'Hello '.$name;
            if ($input->getOption($this->commandOptionName)) {
                $text = strtoupper($text);
            }
            $output->writeln($text);
            return Command::SUCCESS;
        } else {
            $text = $this->commandArgumentDescription;
            $output->writeln($text);
            return Command::INVALID;
        }
    }
}