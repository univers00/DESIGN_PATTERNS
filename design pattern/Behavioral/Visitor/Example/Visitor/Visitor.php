<?php

namespace App\Visitor;

use App\Entity\Company;
use App\Entity\Employe;
use App\Entity\Department;

interface Visitor
{
    public function visitCompany(Company $company): string;

    public function visitDepartment(Department $department): string;

    public function visitEmployee(Employe $employee): string;

}