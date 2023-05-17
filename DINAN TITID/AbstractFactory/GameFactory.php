<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author ASUS
 */
interface GameFactory {
    function createLevel(): Level;
    function createArena(): Arena;
    function createEnemy(): Enemy;
}

class GameFactoryEasy implements GameFactory {
        function createLevel(): Level
        {
            return new LevelEasy();
        }
        
        function createArena(): Arena
        {
            return new ArenaEasy();
        }
        
        function createEnemy(): Enemy 
        {
            return new EnemyEasy();
        }
}

class GameFactoryMedium implements GameFactory {
        function createLevel(): Level
        {
            return new LevelMedium();
        }
        
        function createArena(): Arena
        {
            return new ArenaMedium();
        }
        
         function createEnemy(): Enemy 
        {
            return new EnemyMedium();
        }
}

class GameFactoryHard implements GameFactory {
        function createLevel(): Level
        {
            return new LevelHard();
        }
        
        function createArena(): Arena
        {
            return new ArenaHard();
        }
        
         function createEnemy(): Enemy 
        {
            return new EnemyHard();
        }
}