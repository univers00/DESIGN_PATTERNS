<?php
namespace App;

use App\Entity\Department;
use App\Entity\Company;
use App\Visitor\SalaryReport;
use App\Entity\Employe;

require_once (__DIR__."/../vendor/autoload.php");


$mobileDev = new Department("Mobile Development", [
    new Employe("Albert Falmore", "designer", 100000),
    new Employe("Ali Halabay", "programmer", 100000),
    new Employe("Sarah Konor", "programmer", 90000),
    new Employe("Monica Ronaldino", "QA engineer", 31000),
    new Employe("James Smith", "QA engineer", 30000),
]);
$techSupport = new Department("Tech Support", [
    new Employe("Larry Ulbrecht", "supervisor", 70000),
    new Employe("Elton Pale", "operator", 30000),
    new Employe("Rajeet Kumar", "operator", 30000),
    new Employe("John Burnovsky", "operator", 34000),
    new Employe("Sergey Korolev", "operator", 35000),
]);

$company = new Company("SuperStarDevelopment", [$mobileDev, $techSupport]);

$report = new SalaryReport();
echo $company->accept($report);
