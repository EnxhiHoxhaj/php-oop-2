<?php
// Prodotti per cani

$prodotto1 = new Dog('Croccantini Adulto Genuini', 'Natural Dog', 'Cibo', 'Croccantini ricchi di proteine di alta qualità, con ingredienti naturali per una dieta equilibrata. Senza conservanti artificiali e coloranti.', '€ 29,90');
$prodotto2 = new Dog('Palla Rimbalzante', 'Happy Paws', 'Giochi', "Palla resistente e leggera, perfetta per il gioco all'aperto. Realizzata in gomma non tossica, rimbalza e galleggia nell'acqua.", '€ 12,50');
$prodotto3 = new Dog('Snack Masticabili Pollo Delight', 'Pet Treats', 'Snack', 'Snack morbidi al pollo, ideali per premiare il tuo cane. Alto contenuto proteico e arricchiti con vitamine e minerali.', '€ 8,90');
$prodotto4 = new Dog('Collare Nylon Comfort', 'Woofy', 'Collari e Guinzagli', 'Collare resistente e leggero, regolabile per un comfort ottimale. Disponibile in vari colori e taglie.', '€ 15,00', 'Canee');

$dogProduct = [
    new Dog('Croccantini Adulto Genuini', 'Natural Dog', 'Cibo', 'Croccantini ricchi di proteine di alta qualità, con ingredienti naturali per una dieta equilibrata. Senza conservanti artificiali e coloranti.', '€ 29,90'),
    new Dog('Palla Rimbalzante', 'Happy Paws', 'Giochi', "Palla resistente e leggera, perfetta per il gioco all'aperto. Realizzata in gomma non tossica, rimbalza e galleggia nell'acqua.", '€ 12,50'),
    new Dog('Snack Masticabili Pollo Delight', 'Pet Treats', 'Snack', 'Snack morbidi al pollo, ideali per premiare il tuo cane. Alto contenuto proteico e arricchiti con vitamine e minerali.', '€ 8,90'),
    new Dog('Collare Nylon Comfort', 'Woofy', 'Collari e Guinzagli', 'Collare resistente e leggero, regolabile per un comfort ottimale. Disponibile in vari colori e taglie.', '€ 15,00'),
];



// Prodotti per Gatti

$prodotto5 = new Cat('Croccantini Adult Cat Chicken', 'Royal Canin', 'Cibo', 'Croccantini specificamente formulati per gatti adulti, a base di pollo, ricchi di nutrienti essenziali per la salute e il benessere del tuo felino. Favoriscono una digestione sana e mantenimento del peso.', '€ 25,99', 'Gatto');
$prodotto6 = new Cat('Giocattolo Interattivo "Piuma Volante"', 'Trixie', 'Giochi', 'Giocattolo elettrico che simula il movimento di una preda, stimolando l\'istinto di caccia del tuo gatto. Include piume colorate per un\'attrattiva visiva.', '€ 19,90', 'Gatto');
$prodotto7 = new Cat('Lettiera Naturale "Eco Cat"', 'Ökocat', 'Accessori', 'Lettiera composta da materiali naturali e biodegradabili, con un\'eccellente capacità di assorbimento e controllo degli odori. Sicura per gli animali e per l\'ambiente.', '€ 14,50', 'Gatto');
$prodotto8 = new Cat('Snack per Gatti "Catnip Bites"', 'Petstages', 'Cibo/Giochi', 'Deliziosi snack croccanti ripieni di erba gatta, ideali per stimolare l\'attività e il gioco. Perfetti come premio durante l\'allenamento o semplicemente per viziare il tuo gatto.', '€ 4,99', 'Gatto');

$catProduct = [
    new Cat('Croccantini Adult Cat Chicken', 'Royal Canin', 'Cibo', 'Croccantini specificamente formulati per gatti adulti, a base di pollo, ricchi di nutrienti essenziali per la salute e il benessere del tuo felino. Favoriscono una digestione sana e mantenimento del peso.', '€ 25,99', 'Gatto'),
    new Cat('Giocattolo Interattivo "Piuma Volante"', 'Trixie', 'Giochi', 'Giocattolo elettrico che simula il movimento di una preda, stimolando l\'istinto di caccia del tuo gatto. Include piume colorate per un\'attrattiva visiva.', '€ 19,90', 'Gatto'),
    new Cat('Lettiera Naturale "Eco Cat"', 'Ökocat', 'Accessori', 'Lettiera composta da materiali naturali e biodegradabili, con un\'eccellente capacità di assorbimento e controllo degli odori. Sicura per gli animali e per l\'ambiente.', '€ 14,50', 'Gatto'),
    new Cat('Snack per Gatti "Catnip Bites"', 'Petstages', 'Cibo/Giochi', 'Deliziosi snack croccanti ripieni di erba gatta, ideali per stimolare l\'attività e il gioco. Perfetti come premio durante l\'allenamento o semplicemente per viziare il tuo gatto.', '€ 4,99', 'Gatto'),

];

var_dump($dogProduct, $catProduct);
