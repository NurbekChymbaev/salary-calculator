#!/usr/bin/env php
<?php

require __DIR__ . '../vendor/autoload.php';

use SalaryCalculator\SalaryCalculatorCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new SalaryCalculatorCommand());
$application->setDefaultCommand('salary:calculate');
$application->run();