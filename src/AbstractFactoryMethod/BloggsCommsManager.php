<?php
/**
 * Created by PhpStorm.
 * User: thawy
 * Date: 6/30/17
 * Time: 3:05 AM
 */

namespace Terekhov\AbstractFactoryMethod;


class BloggsCommsManager extends CommsManager
{

    function getHeaderText()
    {
        return "Header text\n";
    }

    function getApptEncoder()
    {
        return new BloggsAppointmentsEncoder();
    }

    function getFooterTest()
    {
        return "Bottom text\n";
    }
}