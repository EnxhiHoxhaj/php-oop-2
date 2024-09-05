<?php
require_once __DIR__ . '/Product.php';
class Dog extends Product
{
    public function __construct($_image, string $_name, string  $_brend, string $_categori, string  $_description, float $_price, string $_animal)
    {
        parent::__construct($_image, $_name, $_brend, $_categori, $_description, $_price, $_animal);
    }
}
