<?php
/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. */

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





$cane->setFood('crocchette', 40, new Item('immagine di copertina prodotto', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova'));
$cane->setLeash('cibo umido', 40, new Item('immagine di copertina prodotto', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova'));



var_dump($cane->food);
var_dump($cane->leash);

var_dump($categories);



class Product_type
{
    public $food = [];
    public $toy = [];
    public $leash = [];
    public $kennel_mats = [];


    public function setFood($food_type, $weigth, Item $item)
    {
        $food_product = [$food_type, $weigth, $item];
        array_push($this->food, $food_product);
    }

    public function setToy($toy_type, Item $item)
    {
        $toy_product = [$toy_type, $item];
        array_push($this->toy, $toy_product);
    }

    public function setLeash($leash_size, $leash_color, Item $item)
    {
        $leash_product = [$leash_size, $leash_color, $item];
        array_push($this->leash, $leash_product);
    }

    public function setKennel_Mats($kennel_dimension, $kennel_use, $kennel_color, Item $item)
    {
        $Kennel_Mats_product = [$kennel_dimension, $kennel_use, $kennel_color, $item];
        array_push($this->leash, $Kennel_Mats_product);
    }
}

class Item
{
    public $cover;
    public $name;
    public $description;
    public $category;
    public $quantity;
    public $brand;

    public function __construct($_cover, $_name, $_description, $_category, $_quantity, $_brand)
    {
        $this->cover = $_cover;
        $this->name = $_name;
        $this->description = $_description;
        $this->category = $_category;
        $this->quantity =  $_quantity;
        $this->brand = $_brand;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store</title>
</head>

<body>

</body>

</html>