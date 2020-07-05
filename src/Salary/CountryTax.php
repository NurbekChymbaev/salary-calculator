<?php

namespace SalaryCalculator\Salary;

class CountryTax extends Operation
{
    const COUNTRY_TAX = -20;

    public function getOperationSum(): int
    {
        return (int)round($this->employee->getSalary() / 100 * self::COUNTRY_TAX);
    }
}