<?php
/**
 * Created by PhpStorm.
 * User: thawy
 * Date: 6/30/17
 * Time: 3:23 AM
 */

namespace Terekhov\Prototype\Terrains\Factories;


use Terekhov\Prototype\Terrains\Forest;
use Terekhov\Prototype\Terrains\Plains;
use Terekhov\Prototype\Terrains\Sea;

class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    /**
     * TerrainFactory constructor.
     * @param $sea
     * @param $forest
     * @param $plains
     */
    public function __construct(Sea $sea, Forest $forest, Plains $plains)
    {
        $this->sea = $sea;
        $this->forest = $forest;
        $this->plains = $plains;
    }

    /**
     * @return Sea
     */
    public function getSea(): Sea
    {
        return clone $this->sea;
    }

    /**
     * @return Forest
     */
    public function getForest(): Forest
    {
        return clone $this->forest;
    }

    /**
     * @return Plains
     */
    public function getPlains(): Plains
    {
        return clone $this->plains;
    }





}