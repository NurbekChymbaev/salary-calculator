<?php

namespace SalaryCalculator\Salary;

class AgeBonus extends Operation
{
    const AGE = 50;
    const PERCENTAGE = 7;

    public function getOperationSum(): int
    {
        if ($this->employee->getAge() > self::AGE) {
            return (int)round($this->employee->getSalary() / 100 * self::PERCENTAGE);
        }

        return 0;
    }
}