<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of EmployeeFactory
 *
 * @author ASUS
 */
class EmployeeFactory {
    static function createManager($name): Employee
    {
        return new Employee($name, "Manager", 100000000);
    }
    
    static function createStaff($name): Employee
    {
        return new Employee($name, "Staff", 100000000);
    }
}
