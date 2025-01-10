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

    public function testSetAndGetEmployeeId(): void
    {
        $employee = new Employee;

        $this->assertNull($employee->getId(), "Expected null before setting an ID");

        $employee->setId(123);
        $this->assertSame(123, $employee->getId(), "Expected ID to be 123");
    }

    public function testSetInvalidEmployeeId(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("ID must be a positive integer.");

        $employee = new Employee;
        $employee->setId(-5); // This should throw an exception
    }
}