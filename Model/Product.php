<?php
class Product
{
    public $name;
    public $brend;
    public $categori;
    public $description;
    public $price;

    public function __construct($_name, $_brend, $_categori, $_description, $_price)
    {
        $this->name = $_name;
        $this->brend = $_brend;
        $this->categori = $_categori;
        $this->description = $_description;
        $this->price = $_price;
    }
}
