<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of AnimalFactory
 *
 * @author riski
 */
class AnimalFactory {
    //put your code here
    public static function create($type): Animal
    {
        if($type == "tiger"){
            return new Tiger2();
        }else if ($type == "cat"){
            return new Cat();
        }else if ($type == "god"){
            return new Dog();
        }
    }
}
