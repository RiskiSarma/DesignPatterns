<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$manager1 = EmployeeFactory::createManager(Rizki);

$manager2 = EmployeeFactory::createManager(Sarma);
   
$staff1 = EmployeeFactory::createStaff("Saputra");

$staff2 = EmployeeFactory::crateStaff("Rudi");

//

$tiger = AnimalFactory::create("tiger");

$cat = AnimalFactory::create("cat");

$dog = AnimalFactory::create("dog"); 