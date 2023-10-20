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

require ROOT . DS . 'models' . DS . 'Product.php';
require ROOT . DS . 'models' . DS . 'Animal.php';





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
                    <h3>Tipologia : <?= $category->category ?></h3>


                    <?php require ROOT . DS . 'layout' . DS . 'Food.php'; ?>

                    <?php require ROOT . DS . 'layout' . DS . 'Toys.php'; ?>

                    <?php require ROOT . DS . 'layout' . DS . 'Leash.php'; ?>

                    <?php require ROOT . DS . 'layout' . DS . 'Kennel_Mats.php'; ?>

                </section>

            <?php endforeach; ?>

        </div>


    </div>


    <!-- bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>