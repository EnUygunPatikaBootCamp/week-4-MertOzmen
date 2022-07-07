<?php
// src/Command/CreateUserCommand.php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class CreateArrayCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-array';

    protected function configure(): void
    {
        $this
            // configure an argument
            ->addArgument('value', InputArgument::REQUIRED, 'Sayi Giriniz')
            // ...
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $data = range(1, 1000);
        $Array = array_rand($data, $input->getArgument('value'));
        
        $json = json_encode($Array);

        sort($Array);

        $smallest = current($Array);
        $biggest = end($Array);
        

        $output->writeln('Diziniz : '.$json.'    En Büyük Sayı : ' . $biggest . '    En Küçük Sayı: : ' . $smallest);

        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;

        // or return this to indicate incorrect command usage; e.g. invalid options
        // or missing arguments (it's equivalent to returning int(2))
        // return Command::INVALID
    }
}