<?php

interface Animal {
    //put your code here
    function speak();
}
/** 
 * @depraceted
 *  */
class Tiger implements Animal{
    function speak(){
        echo "ROAR!";
    }
}

class Tiger2 implements Animal{
    function speak(){
        echo "ROAR!";
    }
}

class Cat implements Animal{
    function speak(){
        echo "Meow";
    }
}

class Dog implements Animal{
    function speak(){
        echo "Guk Guk";
    }
}