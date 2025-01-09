<?php

namespace unit;


use App\models\Employee;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{
    public function testGetEmployeeName(): void
    {
        $employee = new Employee;

        $this->assertNull($employee->getName(), "Expected null before setting a name");

        $employee->setName("Roger");

        $this->assertSame("Roger", $employee->getName());
    }
}