<?php
/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. */



define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);


class Product extends Product_type
{
    public $category;



    public function __construct($_category)
    {
        $this->category = $_category;
    }
}

$categories = [
    $cane = new Product('Cane'),
    $gatto = new Product('Gatto'),
];



/* da sistemare!! */

$cane->setFood('crocchette', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao questa è una descrizione', 'prova', 'ciao', 'altra prova', 16.99));
$cane->setFood('crocchette', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));

$cane->setLeash('cibo umido', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));
$cane->setToy('cibo umido', new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));

$cane->setKennel_Mats('cibo umido', 'pino', 'ciao', new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));

$gatto->setFood('crocchette', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao questa è una descrizione', 'prova', 'ciao', 'altra prova', 16.99));
$gatto->setFood('crocchette', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));

$gatto->setLeash('cibo umido', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));
$gatto->setToy('cibo umido', new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));

$gatto->setKennel_Mats('cibo umido', 'pino', 'ciao', new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));




class Product_type
{


    public $food = [];
    public $toy = [];
    public $leash = [];
    public $kennel_mats = [];






    public function setFood($food_type, $weigth, Item $item)
    {
        $foodValue = [
            'food_type' => $food_type,
            'weigth' => $weigth
        ];
        $food_info = $item->productArray;

        $arrayFood = array_merge($food_info, $foodValue);

        array_push($this->food, $arrayFood);
    }

    public function setToy($toy_type, Item $item)
    {

        $toyValue = ['toy_type' => $toy_type];
        $toy_info = $item->productArray;

        $arrayToy = array_merge($toy_info, $toyValue);

        array_push($this->toy, $arrayToy);
    }

    public function setLeash($leash_size, $leash_color, Item $item)
    {

        $leashValue = [
            'leash_size' => $leash_size,
            'leash_color' => $leash_color
        ];
        $leash_info = $item->productArray;

        $arrayLeash = array_merge($leash_info, $leashValue);

        array_push($this->leash, $arrayLeash);
    }

    public function setKennel_Mats($kennel_dimension, $kennel_use, $kennel_color, Item $item)
    {


        $kennelValue = [
            'kennel_dimension' => $kennel_dimension,
            'kennel_use' => $kennel_use,
            'kennel_color' => $kennel_color
        ];
        $kennel_info = $item->productArray;

        $arrayKennel = array_merge($kennel_info, $kennelValue);

        array_push($this->kennel_mats, $arrayKennel);
    }
}

class Item
{
    public $productArray;


    public function __construct($_cover, $_name, $_description, $_category, $_quantity, $_brand, $_price)
    {


        $this->productArray = [
            'cover' => $_cover,
            'name' => $_name,
            'description' => $_description,
            'category' => $_category,
            'quantity' => $_quantity,
            'brand' => $_brand,
            'price' => $_price,
        ];
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h1>benvenuto nel pet store</h1>

        <div class="row">

            <?php foreach ($categories as $category) : ?>
                <section class="animal ">
                    <h3><?= $category->category ?></h3>


                    <section id="food">
                        <h4>Food</h4>

                        <div class="eb_cards row gap-2">

                            <?php foreach ($category->food as $value) : ?>

                                <div class="card" style="width: 18rem;">
                                    <img src="<?= $value['cover'] ?>" class="card-img-top" alt="<?= $value['name'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $value['name'] ?></h5>
                                        <p class="card-text">
                                            <?= $value['description'] ?>
                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?= $value['category'] ?></li>
                                        <li class="list-group-item"><?= $value['quantity'] ?></li>
                                        <li class="list-group-item"><?= $value['brand'] ?></li>
                                        <li class="list-group-item"><?= $value['price'] ?></li>
                                        <li class="list-group-item"><?= $value['food_type'] ?></li>
                                        <li class="list-group-item"><?= $value['weigth'] ?></li>

                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>

                    <section id="toy">
                        <h4>toy</h4>

                        <div class="eb_cards row gap-2">

                            <?php foreach ($category->toy as $value) : ?>

                                <div class="card" style="width: 18rem;">
                                    <img src="<?= $value['cover'] ?>" class="card-img-top" alt="<?= $value['name'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $value['name'] ?></h5>
                                        <p class="card-text">
                                            <?= $value['description'] ?>
                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?= $value['category'] ?></li>
                                        <li class="list-group-item"><?= $value['quantity'] ?></li>
                                        <li class="list-group-item"><?= $value['brand'] ?></li>
                                        <li class="list-group-item"><?= $value['price'] ?></li>
                                        <li class="list-group-item"><?= $value['toy_type'] ?></li>

                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>

                    <section id="Leash">
                        <h4>Leash</h4>

                        <div class="eb_cards row gap-2">

                            <?php foreach ($category->leash as $value) : ?>

                                <div class="card" style="width: 18rem;">
                                    <img src="<?= $value['cover'] ?>" class="card-img-top" alt="<?= $value['name'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $value['name'] ?></h5>
                                        <p class="card-text">
                                            <?= $value['description'] ?>
                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?= $value['category'] ?></li>
                                        <li class="list-group-item"><?= $value['quantity'] ?></li>
                                        <li class="list-group-item"><?= $value['brand'] ?></li>
                                        <li class="list-group-item"><?= $value['price'] ?></li>
                                        <li class="list-group-item"><?= $value['leash_size'] ?></li>
                                        <li class="list-group-item"><?= $value['leash_color'] ?></li>

                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>


                    <section id="kennel_mats">
                        <h4>kennel_mats</h4>

                        <div class="eb_cards row gap-2">

                            <?php foreach ($category->kennel_mats as $value) : ?>

                                <div class="card" style="width: 18rem;">
                                    <img src="<?= $value['cover'] ?>" class="card-img-top" alt="<?= $value['name'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $value['name'] ?></h5>
                                        <p class="card-text">
                                            <?= $value['description'] ?>
                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?= $value['category'] ?></li>
                                        <li class="list-group-item"><?= $value['quantity'] ?></li>
                                        <li class="list-group-item"><?= $value['brand'] ?></li>
                                        <li class="list-group-item"><?= $value['price'] ?></li>
                                        <li class="list-group-item"><?= $value['kennel_dimension'] ?></li>
                                        <li class="list-group-item"><?= $value['kennel_use'] ?></li>
                                        <li class="list-group-item"><?= $value['kennel_color'] ?></li>

                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>

                </section>

            <?php endforeach; ?>

        </div>


    </div>


    <!-- bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>