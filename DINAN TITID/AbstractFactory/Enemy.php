<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

interface Enemy
{
    function start();
}

class EnemyEasy implements Enemy
{
    function start()
    {
        echo "Enemy Easy";
    }
}

class EnemyMedium implements Enemy
{
    function start()
    {
        echo "Enemy Medium";
    }
}

class EnemyHard implements Enemy
{
    function start()
    {
        echo "Enemy Hard";
    }
}
