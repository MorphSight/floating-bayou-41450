<?php

require_once("Player.php");
require_once("Position.php");
require_once("World.php");
require_once("MapTileType.php");
require_once 'MapTileManager.php';

class WorldTestInitializer
{
    public static function CreateTestPlayer(){
        $player = new Player();
        $position = new Position(5, 5);

        GameManager::GetGame()->setPlayerAndGiveEntity($player, $position);
    }

    public static function GenerateTestWorld(){
        $world = GameManager::GetGame()->getWorld();
        $grass = new MapTileType("Grass", ".", new Color(10, 128, 10));
        $rock = new MapTileType("Tall Grass", ":", new Color(8, 156, 8));
        $tallGrass = new MapTileType("Rock", "@", new Color(255, 128, 0));
        MapTileManager::AddNewType($grass);
        MapTileManager::AddNewType($tallGrass);
        MapTileManager::AddNewType($rock);


        for ($x = 0; $x < $world->getMap()->getWidth(); $x++){
            for ($y = 0; $y < $world->getMap()->getHeight(); $y++){
                $rockChance = mt_rand(0, 7);
                $tallGrassChance = mt_rand(0, 6);
                $world->getMap()->setTileTypeAt(($tallGrassChance != 0 ? $grass : $tallGrass), $x, $y);
                if ($rockChance != 3) {
                    $world->getMap()->setTileTypeAt($rock, $x, $y);
                }
            }
        }
    }
}