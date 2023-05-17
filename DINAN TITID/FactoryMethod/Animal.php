<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
interface Animal
{
    function speak();
}
/**
 * @deprecated 
 */
class Tiger implements Animal
{
    function speak()
    {
        echo "Roar!";
    }
}

class Tiger2 implements Animal
{
    function speak()
    {
        echo "Roar!";
    }
}

class Cat implements Animal
{
    function speak()
    {
        echo "Meow";
    }
}

class Dog implements Animal
{
    function speak()
    {
        echo "Gug gug";
    }
}