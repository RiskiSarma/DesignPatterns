<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$gameEasy = new Game(new GameFactoryEasy());
$gameEasy->start();

$gameMedium = new Game(new GameFactoryMedium());
$gameMedium->start();

$gameHard= new Game(new GameFactoryHard());
$gameHard->start();