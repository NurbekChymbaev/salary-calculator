<?php

use PHPUnit\Framework\TestCase;
use SalaryCalculator\Employee\EmployeeFactory;
use SalaryCalculator\Employee\EmployeeInterface;

class EmployeeTest extends TestCase
{
    public function testEmployeeFactory()
    {
        $json = '{
            "name": "Alice",
            "age": 26,
            "kids": 2,
            "salary": 6000
        }';

        $employee = EmployeeFactory::createFromObject(json_decode($json));

        $this->assertTrue($employee instanceof EmployeeInterface);
        $this->assertEquals('Alice', $employee->getName());
        $this->assertEquals(26, $employee->getAge());
        $this->assertEquals(2, $employee->getKids());
        $this->assertEquals(false, $employee->getCompanyCar());
        $this->assertEquals(6000, $employee->getSalary());
    }
}