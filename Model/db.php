<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Dog.php';
require_once __DIR__ . '/Cat.php';


// Prodotti per cani


try {
    $correctRating = new Dog('./img/in-the-nature-adult-all-breeds-con-agnello1.webp', 'Croccantini Adulto Genuini', 'Natural Dog', 'Cibo', 'Croccantini ricchi di proteine di alta qualità, con ingredienti naturali per una dieta equilibrata. Senza conservanti artificiali e coloranti.', 29.90, 'Cane', 0);
    $correctRating->setVoteProduct($_vote);
} catch (Exception $e) {
    echo 'Errore:' . ' ' . $e->getMessage();
}

// $prodotto1 = new Dog('./img/in-the-nature-adult-all-breeds-con-agnello1.webp', 'Croccantini Adulto Genuini', 'Natural Dog', 'Cibo', 'Croccantini ricchi di proteine di alta qualità, con ingredienti naturali per una dieta equilibrata. Senza conservanti artificiali e coloranti.', 29.90, 'Cane', 4);
$prodotto2 = new Dog('./img/ferplast-pa-5537-pallina-sonora-per-cani.jpg', 'Palla Rimbalzante', 'Happy Paws', 'Giochi', "Palla resistente e leggera, perfetta per il gioco all'aperto. Realizzata in gomma non tossica, rimbalza e galleggia nell'acqua.", 12.50, 'Cane', 3.8);
$prodotto3 = new Dog('./img/231098_pla_tetra_8in1_delights_strong_kauknochen_huhn_140g_hs_01_9.jpg', 'Snack Masticabili Pollo Delight', 'Pet Treats', 'Snack', 'Snack morbidi al pollo, ideali per premiare il tuo cane. Alto contenuto proteico e arricchiti con vitamine e minerali.', 8.90, 'Cane', 4.2);
$prodotto4 = new Dog('./img/collare-per-cani-comfort-line-verde-25-mm.jpg', 'Collare Nylon Comfort', 'Woofy', 'Collari e Guinzagli', 'Collare resistente e leggero, regolabile per un comfort ottimale. Disponibile in vari colori e taglie.', 15.00, 'Cane', 3.5);

// Prodotti per Gatti

$prodotto5 = new Cat('./img/Lylis-Kitchen-Chicken-Casserole-Gatti-Adulti-Pollo-Classic-Dry-Food-5056273600657-Lylis-Kitchen-Formato-Confezione-rid-896.jpg', 'Croccantini Adult Cat Chicken', 'Royal Canin', 'Cibo', 'Croccantini specificamente formulati per gatti adulti, a base di pollo, ricchi di nutrienti essenziali per la salute e il benessere del tuo felino. Favoriscono una digestione sana e mantenimento del peso.', 25.99, 'Gatto', 4);
$prodotto6 = new Cat('./img/550132462_0340_0340.jpg', 'Giocattolo Interattivo "Piuma Volante"', 'Trixie', 'Giochi', 'Giocattolo elettrico che simula il movimento di una preda, stimolando l\'istinto di caccia del tuo gatto. Include piume colorate per un\'attrattiva visiva.',  19.90, 'Gatto', 3.8);
$prodotto7 = new Cat('./img/Perfect-Lettiera-Eco-Cellulosa-per-gatti-10L.webp', 'Lettiera Naturale "Eco Cat"', 'Ökocat', 'Accessori', 'Lettiera composta da materiali naturali e biodegradabili, con un\'eccellente capacità di assorbimento e controllo degli odori. Sicura per gli animali e per l\'ambiente.', 14.50, 'Gatto', 4.2);
$prodotto8 = new Cat('./img/CrazyCatnipMeows_grande.webp', 'Snack per Gatti "Catnip Bites"', 'Petstages', 'Cibo/Giochi', 'Deliziosi snack croccanti ripieni di erba gatta, ideali per stimolare l\'attività e il gioco. Perfetti come premio durante l\'allenamento o semplicemente per viziare il tuo gatto.', 4.99, 'Gatto', 3.5);

$shopProducts = [
    new Dog('./img/in-the-nature-adult-all-breeds-con-agnello1.webp', 'Croccantini Adulto Genuini', 'Natural Dog', 'Cibo', 'Croccantini ricchi di proteine di alta qualità, con ingredienti naturali per una dieta equilibrata. Senza conservanti artificiali e coloranti.', 29.90, 'Cane', 4),
    new Dog('./img/ferplast-pa-5537-pallina-sonora-per-cani.jpg', 'Palla Rimbalzante', 'Happy Paws', 'Giochi', "Palla resistente e leggera, perfetta per il gioco all'aperto. Realizzata in gomma non tossica, rimbalza e galleggia nell'acqua.", 12.50, 'Cane', 3.8),
    new Cat('./img/Lylis-Kitchen-Chicken-Casserole-Gatti-Adulti-Pollo-Classic-Dry-Food-5056273600657-Lylis-Kitchen-Formato-Confezione-rid-896.jpg', 'Croccantini Adult Cat Chicken', 'Royal Canin', 'Cibo', 'Croccantini specificamente formulati per gatti adulti, a base di pollo, ricchi di nutrienti essenziali per la salute e il benessere del tuo felino. Favoriscono una digestione sana e mantenimento del peso.', 25.99, 'Gatto', 4),
    new Cat('./img/550132462_0340_0340.jpg', 'Giocattolo Interattivo "Piuma Volante"', 'Trixie', 'Giochi', 'Giocattolo elettrico che simula il movimento di una preda, stimolando l\'istinto di caccia del tuo gatto. Include piume colorate per un\'attrattiva visiva.', 19.90, 'Gatto', 3.8),
    new Dog('./img/231098_pla_tetra_8in1_delights_strong_kauknochen_huhn_140g_hs_01_9.jpg', 'Snack Masticabili Pollo Delight', 'Pet Treats', 'Snack', 'Snack morbidi al pollo, ideali per premiare il tuo cane. Alto contenuto proteico e arricchiti con vitamine e minerali.', 8.90, 'Cane', 4.2),
    new Cat('./img/Perfect-Lettiera-Eco-Cellulosa-per-gatti-10L.webp', 'Lettiera Naturale "Eco Cat"', 'Ökocat', 'Accessori', 'Lettiera composta da materiali naturali e biodegradabili, con un\'eccellente capacità di assorbimento e controllo degli odori. Sicura per gli animali e per l\'ambiente.', 14.50, 'Gatto', 4.2),
    new Dog('./img/collare-per-cani-comfort-line-verde-25-mm.jpg', 'Collare Nylon Comfort', 'Woofy', 'Collari e Guinzagli', 'Collare resistente e leggero, regolabile per un comfort ottimale. Disponibile in vari colori e taglie.', 15.00, 'Cane', 3.5),
    new Cat('./img/CrazyCatnipMeows_grande.webp', 'Snack per Gatti "Catnip Bites"', 'Petstages', 'Cibo/Giochi', 'Deliziosi snack croccanti ripieni di erba gatta, ideali per stimolare l\'attività e il gioco. Perfetti come premio durante l\'allenamento o semplicemente per viziare il tuo gatto.', 4.99, 'Gatto', 3.5),

];

// var_dump($shopProducts);
