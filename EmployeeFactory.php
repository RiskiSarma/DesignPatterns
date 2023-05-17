<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of EmployeeFactory
 *
 * @author riski
 */
class EmployeeFactory {
    //put your code here
    static function createManager($name): Employee{
        return new Employee($name, "manager", 100000);
    }
    static function createStaff($name): Employee{
        return new Employee($name, "Staff", 100000);
    }
}
