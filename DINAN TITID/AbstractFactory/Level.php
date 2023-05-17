<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

interface Level
{
    function start();
}

class LevelEasy implements Level
{
    function start()
    {
        echo "Level Easy";
    }
}

class LevelMedium implements Level
{
    function start()
    {
        echo "Level Medium";
    }
}

class LevelHard implements Level
{
    function start()
    {
        echo "Level Hard";
    }
}