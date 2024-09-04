<?php

class Dog extends Product
{
    public static $dog = 'Cane';

    public function __construct($_image, string $_name, string  $_brend, string $_categori, string  $_description, string $_price)
    {
        parent::__construct($_image, $_name, $_brend, $_categori, $_description, $_price);
    }
}
