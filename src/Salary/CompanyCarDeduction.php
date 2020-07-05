<?php

namespace SalaryCalculator\Salary;

class CompanyCarDeduction extends Operation
{
    const COMPANY_CAR_DEDUCTION = -500;

    public function getOperationSum(): int
    {
        return $this->employee->getCompanyCar() ? self::COMPANY_CAR_DEDUCTION : 0;
    }
}