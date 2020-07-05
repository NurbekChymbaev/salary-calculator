<?php

namespace SalaryCalculator\Salary;

use SalaryCalculator\Employee\EmployeeInterface;

abstract class Operation implements OperationInterface
{
    protected $employee;

    public function __construct(EmployeeInterface $employee)
    {
        $this->employee = $employee;
    }
}