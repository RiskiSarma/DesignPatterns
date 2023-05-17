<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of AnimalFactory
 *
 * @author ASUS
 */
class AnimalFactory {
    public static function create($type): Animal
    {
        if ($type == "tiger"){
            return new Tiger();
        } else if ($type == "cat"){
            return new Cat();
        } else if ($type == "dog"){
            return new Dog();
        }
    }
}
