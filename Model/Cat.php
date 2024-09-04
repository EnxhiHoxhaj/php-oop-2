<?php

class Cat extends Product
{
    public $animal;

    public function __construct(string $_name, string  $_brend, string  $_categori, string  $_description, int $_price, string  $_animal)
    {
        parent::__construct($_name, $_brend, $_categori, $_description, $_price);
        $this->animal = $_animal;
    }
}
