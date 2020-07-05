<?php

namespace SalaryCalculator\Salary;

class KidsBonus extends Operation
{
    const KIDS_BONUS = 2;
    const KIDS = 2;

    public function getOperationSum(): int
    {
        if ($this->employee->getKids() > self::KIDS) {
            return (int)round($this->employee->getSalary() / 100 * self::KIDS_BONUS);
        }
        return 0;
    }
}