<?php
class Product
{
    public $image;
    public $name;
    public $brend;
    public $categori;
    public $description;
    public $price;

    public function __construct($_image, $_name, $_brend, $_categori, $_description, $_price)
    {
        $this->image = $_image;
        $this->name = $_name;
        $this->brend = $_brend;
        $this->categori = $_categori;
        $this->description = $_description;
        $this->price = $_price;
    }
}
