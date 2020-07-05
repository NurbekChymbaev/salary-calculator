<?php

use PHPUnit\Framework\TestCase;
use SalaryCalculator\Employee\Employee;
use SalaryCalculator\SalaryCalculator;

class SalaryCalculatorTest extends TestCase
{
    public function testCountryTax()
    {
        $employee = new Employee();
        $employee->setSalary(5000);
        $this->assertEquals(4000, (new SalaryCalculator($employee))->getFinalSalary());
    }

    public function testKidsBonus()
    {
        $employee = new Employee();
        $employee->setSalary(5000);
        $employee->setKids(3);

        $this->assertEquals(4100, (new SalaryCalculator($employee))->getFinalSalary());
    }

    public function testAgeBonus()
    {
        $employee = new Employee();
        $employee->setSalary(1000);
        $employee->setAge(51);

        $this->assertEquals(870, (new SalaryCalculator($employee))->getFinalSalary());
    }

    public function testCompanyCarDeduction()
    {
        $employee = new Employee();
        $employee->setSalary(5000);
        $employee->setCompanyCar(true);

        $this->assertEquals(3500, (new SalaryCalculator($employee))->getFinalSalary());
    }

    public function testSalaryCalculator()
    {
        $employee = new Employee();
        $employee->setSalary(5000);
        $employee->setKids(3);
        $employee->setAge(60);
        $employee->setCompanyCar(true);

        $this->assertEquals(3950, (new SalaryCalculator($employee))->getFinalSalary());
    }
}