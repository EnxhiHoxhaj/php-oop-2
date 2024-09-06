<?php
class Product
{
    public $image;
    protected $name;
    public $brend;
    public $categori;
    public $description;
    public $price;
    public $animal;
    public $vote;


    public function __construct($_image, $_name, $_brend, $_categori, $_description, $_price, $_animal, $_vote)
    {
        $this->image = $_image;
        $this->setName($_name);
        $this->brend = $_brend;
        $this->categori = $_categori;
        $this->description = $_description;
        $this->price = $_price;
        $this->animal = $_animal;
        $this->vote = $_vote;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (empty($name) || strlen($name) <= 3) {
            throw new Exception('Il prodotto che hai inserito deve avere almeno 4 caratteri');
        }
        $this->name = $name;
    }
    public function voteProduct()
    {
        return 'Il prodotto' . ' ' . $this->name . ' ' . 'ha ottenuto' . ' ' . $this->vote . ' ' . 'stelle';
    }
}
