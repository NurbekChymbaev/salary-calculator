<?php

namespace SalaryCalculator\Employee;

use stdClass;

class EmployeeFactory
{
    static public function createFromObject(stdClass $object): EmployeeInterface
    {
        $employee = new Employee();
        $employee->setName($object->name);
        $employee->setAge($object->age);
        $employee->setSalary($object->salary ?? 0);
        $employee->setKids($object->kids ?? 0);
        $employee->setCompanyCar($object->companyCar ?? false);
        return $employee;
    }
}