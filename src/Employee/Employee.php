<?php

namespace SalaryCalculator\Employee;

class Employee implements EmployeeInterface
{
    private $name;

    private $age;

    private $kids;

    private $salary;

    private $companyCar;

    /**
     * @return mixed
     */
    public function getAge(): int
    {
        return $this->age ?? 0;
    }

    /**
     * @param mixed $age
     * @return Employee
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKids(): int
    {
        return $this->kids ?? 0;
    }

    /**
     * @param mixed $kids
     * @return Employee
     */
    public function setKids($kids)
    {
        $this->kids = $kids;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     * @return Employee
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanyCar(): bool
    {
        return $this->companyCar ?? false;
    }

    /**
     * @param mixed $companyCar
     * @return Employee
     */
    public function setCompanyCar($companyCar)
    {
        $this->companyCar = $companyCar;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }
}