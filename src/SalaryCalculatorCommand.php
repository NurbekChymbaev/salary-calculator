<?php

namespace SalaryCalculator;

use SalaryCalculator\Employee\EmployeeFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SalaryCalculatorCommand extends Command
{
    protected static $defaultName = 'salary:calculate';

    protected function configure()
    {
        $this->addOption('source', null, InputOption::VALUE_REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $source = $input->getOption('source');

        if (!$source) {
            $output->writeln("Source is required!");
            return Command::FAILURE;
        }

        if (!is_file($source)) {
            $output->writeln("Source $source is not file!");
            return Command::FAILURE;
        }

        $employees = json_decode(file_get_contents($source));

        if ($employees === null && json_last_error() !== JSON_ERROR_NONE) {
            $output->writeln("Source json $source is broken!");
            return Command::FAILURE;
        }

        foreach ($employees as $obj) {
            $employee = EmployeeFactory::createFromObject($obj);

            $calculator = new SalaryCalculator($employee);
            $salary = $calculator->getFinalSalary();

            $output->writeln("{$employee->getName()}'s salary is {$employee->getSalary()}$ and final is {$salary}$");
        }

        return Command::SUCCESS;
    }
}