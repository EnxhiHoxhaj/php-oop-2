<?php
class Product
{
    public $image;
    public $name;
    public $brend;
    public $categori;
    public $description;
    public $price;
    public $animal;

    public function __construct($_image, $_name, $_brend, $_categori, $_description, $_price, $_animal)
    {
        $this->image = $_image;
        $this->setName($_name);
        $this->brend = $_brend;
        $this->categori = $_categori;
        $this->description = $_description;
        $this->price = $_price;
        $this->animal = $_animal;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (empty($name) || strlen($name) < 4) {
            throw new Exception('Il prodotto che hai inserito deve avere almeno 4 caratteri');
        }
    }
}
