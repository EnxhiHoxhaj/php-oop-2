<?php

class Dog extends Product
{
    public $animal;

    public function __construct(string $_name, string  $_brend, string $_categori, string  $_description, string $_price, string  $_animal)
    {
        parent::__construct($_name, $_brend, $_categori, $_description, $_price);
        $this->animal = $_animal;
    }
}

$prodotto1 = new Dog('Croccantini Adulto Genuini', 'Natural Dog', 'Cibo', 'Croccantini ricchi di proteine di alta qualità, con ingredienti naturali per una dieta equilibrata. Senza conservanti artificiali e coloranti.', '€ 29,90', 'Cane');
$prodotto2 = new Dog('Palla Rimbalzante', 'Happy Paws', 'Giochi', "Palla resistente e leggera, perfetta per il gioco all'aperto. Realizzata in gomma non tossica, rimbalza e galleggia nell'acqua.", '€ 12,50', 'Cane');
$prodotto3 = new Dog('Snack Masticabili Pollo Delight', 'Pet Treats', 'Snack', 'Snack morbidi al pollo, ideali per premiare il tuo cane. Alto contenuto proteico e arricchiti con vitamine e minerali.', '€ 8,90', 'Cane');
$prodotto4 = new Dog('Collare Nylon Comfort', 'Woofy', 'Collari e Guinzagli', 'Collare resistente e leggero, regolabile per un comfort ottimale. Disponibile in vari colori e taglie.', '€ 15,00', 'Canee');
