<?php
/**
 * Created by PhpStorm.
 * User: thawy
 * Date: 6/30/17
 * Time: 3:04 AM
 */

namespace Terekhov\AbstractFactoryMethod;


abstract class CommsManager
{
    abstract function getHeaderText();
    abstract function getApptEncoder();
    abstract function getFooterTest();
}