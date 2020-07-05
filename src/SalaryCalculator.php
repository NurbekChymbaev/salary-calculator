<?php

namespace SalaryCalculator;

use SalaryCalculator\Employee\EmployeeInterface;
use SalaryCalculator\Salary\AgeBonus;
use SalaryCalculator\Salary\CompanyCarDeduction;
use SalaryCalculator\Salary\CountryTax;
use SalaryCalculator\Salary\KidsBonus;
use SalaryCalculator\Salary\OperationInterface;

class SalaryCalculator
{
    protected $employee;

    /**
     * @var $operations OperationInterface[]
     */
    protected $operations = [];

    public function __construct(EmployeeInterface $employee)
    {
        $this->employee = $employee;

        $this->addOperation(new CountryTax($this->employee));
        $this->addOperation(new AgeBonus($this->employee));
        $this->addOperation(new CompanyCarDeduction($this->employee));
        $this->addOperation(new KidsBonus($this->employee));
    }

    public function addOperation(OperationInterface $operation)
    {
        $this->operations[] = $operation;
    }

    public function getFinalSalary(): int
    {
        $salary = $this->employee->getSalary();

        foreach ($this->operations as $operation) {
            $salary += $operation->getOperationSum();
        }

        return $salary;
    }
}