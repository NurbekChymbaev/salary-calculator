<?php

namespace SalaryCalculator\Employee;

interface EmployeeInterface
{
    public function getName(): string;

    public function getAge(): int;

    public function getKids(): int;

    public function getSalary(): int;

    public function getCompanyCar(): bool;
}