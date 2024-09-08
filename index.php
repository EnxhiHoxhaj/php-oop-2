<?php

// includo gli altri file nel mio index
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Cat.php';
require_once __DIR__ . '/Model/Dog.php';
require_once __DIR__ . '/Model/Db.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div>
        <div id="name">
            <h1 id="shop-name">Pet Shop 'Bau e Miao'</h1>
        </div>
        <div class="shop">
            <h3>La nostra selezione per il tuo amico a 4 zampe</h3>
            <div class="card">
                <?php foreach ($shopProducts as $dProduct): ?>
                    <ul>
                        <li class="image">
                            <img src="<?php echo htmlspecialchars($dProduct->image); ?>" alt="<?php echo $dProduct->getName(); ?>">
                        </li>
                        <li class="info-product">
                            <span><strong>Prodotto: </strong><?php echo $dProduct->getName(); ?></span>
                        </li>
                        <li class="info-product">
                            <span><strong>Marca: </strong> </strong><?php echo $dProduct->brend; ?></span>
                        </li>
                        <li class="info-product">
                            <span><strong>Categoria: </strong> </strong><?php echo $dProduct->categori; ?></span>
                        </li>
                        <li class="info-product">
                            <span><strong>Descrizione: </strong> </strong><?php echo $dProduct->description; ?></span>
                        </li>
                        <li class="info-product">
                            <span><strong>Prezzo: </strong> </strong><?php echo $dProduct->price; ?></span>
                        </li>
                        <li class="info-product">
                            <span><strong>Animale: </strong> </strong><?php echo $dProduct->animal ?></span>
                        </li>
                        <li class="info-product">
                            <span><strong>Voto: </strong> </strong><?php echo $dProduct->voteProduct() ?></span>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


</body>

</html>