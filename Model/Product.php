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
    protected $vote;


    public function __construct($_image, $_name, $_brend, $_categori, $_description, $_price, $_animal, $_vote)
    {
        $this->image = $_image;
        $this->setName($_name);
        $this->brend = $_brend;
        $this->categori = $_categori;
        $this->description = $_description;
        $this->price = $_price;
        $this->animal = $_animal;
        $this->setVoteProduct($_vote);
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


    public function setVoteProduct($vote)
    {
        if ($vote < 1 || $vote > 5) {
            throw new Exception('Il voto assegnato deve essere almeno di 1 stella e massimo di 5 stelle');
        }
        $this->vote = $vote;
    }
}
