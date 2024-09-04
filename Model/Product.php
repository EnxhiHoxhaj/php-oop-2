<?php
class Product
{
    public $name;
    public $brend;
    public $description;
    public $price;

    public function __construct($_name, $_brend, $_description, $_price)
    {
        $this->name = $_name;
        $this->brend = $_brend;
        $this->description = $_description;
        $this->price = $_price;
    }
}
