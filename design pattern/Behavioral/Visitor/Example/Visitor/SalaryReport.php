<?php

namespace App\Visitor;

use App\Entity\Company;
use App\Entity\Employe;
use App\Entity\Department;

class SalaryReport implements Visitor
{

    public function visitCompany(Company $company): string
    {

        $output = "";
        $total = 0;

        foreach ($company->getDepartments() as $department) {
            $total += $department->getCost();
            $output .= "\n--" . $this->visitDepartment($department);
        }

        $output = $company->getName() .
            " (" . $total . "MAD )\n" . $output;

        return $output;
    }

    public function visitDepartment(Department $department): string
    {

        $output = "";

        foreach ($department->getEmployees() as $employee) {
            $output .= "   " . $this->visitEmployee($employee);
        }

        $output = $department->getName() .
            " (" . $department->getCost() . " MAD)\n\n" .
            $output;

        return $output;
    }

    public function visitEmployee(Employe $employee): string
    {

        return $employee->getSalary()." MAD" .
            " " . $employee->getName() .
            " (" . $employee->getPosition() . ")\n";
    }


}