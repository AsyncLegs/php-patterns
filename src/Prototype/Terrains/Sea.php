<?php
/**
 * Created by PhpStorm.
 * User: thawy
 * Date: 6/30/17
 * Time: 3:20 AM
 */

namespace Terekhov\Prototype\Terrains;


class Sea
{
    private $navigatibility = 0;

    /**
     * Sea constructor.
     * @param int $navigatibility
     */
    public function __construct($navigatibility)
    {
        $this->navigatibility = $navigatibility;
    }

}