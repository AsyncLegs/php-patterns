<?php
/**
 * Created by PhpStorm.
 * User: thawy
 * Date: 6/30/17
 * Time: 3:03 AM
 */

namespace Terekhov\AbstractFactoryMethod;


class BloggsAppointmentsEncoder extends AppointmentsEncoder
{
    public function encode()
    {
        return "This appointment has been encoded with BloggsCal format \n";
    }

}