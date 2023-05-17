<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Employee{
    private $name;
    
    private $title;
    
    private $salary;
    
    public function __construct($name, $title, $salary){
        $this->name = $name;
        $this->title = $title;
        $this->salary = $salary;
    }
    public function getName(){
        return $this->name;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getSalary(){
        return $this->salary;
    }
}