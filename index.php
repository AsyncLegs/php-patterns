<?php
require 'vendor/autoload.php';

use \Terekhov\AbstractFactoryMethod\{
    BloggsCommsManager
};

use \Terekhov\Prototype\Terrains\Factories\TerrainFactory;
use \Terekhov\Prototype\Terrains\Earth\{
    EarthSea, EarthForest, EarthPlains
};

use \Terekhov\Prototype\Terrains\Mars\{
    MarsSea, MarsForest, MarsPlains
};


//AbstractFactoryMethod
//$manager = new BloggsCommsManager();
//print $manager->getHeaderText();
//print $manager->getApptEncoder()->encode();
//print $manager->getFooterTest();


//Prototype

//$terrainEarthFactory = new TerrainFactory(new EarthSea(-1), new EarthForest(), new EarthPlains());
//$terrainMarsFactory = new TerrainFactory(new MarsSea(1), new MarsForest(), new MarsPlains());
//var_dump($terrainEarthFactory->getForest());
//var_dump($terrainEarthFactory->getSea());
//var_dump($terrainEarthFactory->getPlains());
//
//var_dump($terrainMarsFactory->getForest());
//var_dump($terrainMarsFactory->getSea());
//var_dump($terrainMarsFactory->getPlains());