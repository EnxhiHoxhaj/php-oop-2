<?php

class Cat extends Product
{
    public static $cat = 'Gatto';

    public function __construct(string $_name, string  $_brend, string  $_categori, string  $_description, string $_price)
    {
        parent::__construct($_name, $_brend, $_categori, $_description, $_price);
    }
}
