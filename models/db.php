<?php

// setFood =  'food_type'  'weigth'  
// setToy = 'toy_type'
// setLeash =  $leash_size, 'leash_color'
// setKennel_Mats = 'kennel_dimension', 'kennel_use', 'kennel_color'


try {  // con prezzo sbagliato(stringa)
    $dog->setToy(
        'gommoso',
        new Item(
            'https://picsum.photos/300/300',    //    $_cover,
            'pallina',                          //    $_name,
            'questa è una pallina per cani',    //    $_description,'questa è una pallina per cani'
            'gioco per cani',                   //    $_category,
            500,                                //    $_quantity,
            'Kong',                             //    $_brand,
            'sedici e novantanove'             //    $_price
        )
    );
} catch (Exception $error) {
    echo $error->getMessage();
    echo '<br>';
    //echo $error->getFile();
    //echo '<hr>';
    echo $error->getTraceAsString();
    echo '<br>';
    //echo $error;
}

try {  // con nome sbagliato(numero)
    $dog->setToy(
        'gommoso',
        new Item(
            'https://picsum.photos/300/300',    //    $_cover,
            1569,                               //    $_name, 'pallina'
            'questa è una pallina per cani',    //    $_description,'questa è una pallina per cani'
            'gioco per cani',                   //    $_category,
            500,                                //    $_quantity,
            'Kong',                             //    $_brand,
            16.99                               //    $_price
        )
    );
} catch (Exception $error) {
    echo '<hr>';
    echo $error->getMessage();
    echo '<br>';
    echo $error->getTraceAsString();
}


$dog->setFood('crocchette per cane piccolo', 1.5, new Item('https://picsum.photos/300/300', 'crocchetta', 'Queste crocchette sono adatte per i bassotti', 'cibo per cani', '300', 'purina', 20.56));
$dog->setFood('crocchette per cane grande', 5.5, new Item('https://picsum.photos/300/300', 'crocchetta', 'Queste crocchette sono adatte per i cani di taglia media', 'cibo per cani', '250', 'purina', 16.99));
$dog->setLeash('L, Xl', 'rosso, giallo, verde', new Item('https://picsum.photos/300/300', 'collare per cani di grosse dimensioni', 'questo collare aiuta a mantenere il controllo del tuo cane anche se di taglia grande', 'collari', '10', 'K9', 26.50));

$dog->setKennel_Mats('150 x 50x 100 cm', 'esterno', 'verde', new Item('https://picsum.photos/300/300', 'cuccia per cani', 'cuccia per cani da esterno', 'cuccia', '2', 'nessuno', 110.00));



$cat->setFood('crocchette per gatti intolleranti', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'Queste crocchette sono adatte per i gatti con intolleranze', 'cibo per gatti', '300', 'purina', 25.00));
$cat->setFood('crocchette di pesce', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'Queste crocchette sono a base di pesce', 'cibo per gatti', '300', 'purina', 25.00));

$cat->setLeash('L, Xl', 'rosso, giallo, verde', new Item('https://picsum.photos/300/300', 'collare per gatti', 'questo collare aiuta a mantenere il controllo del tuo gatto', 'collari', '10', 'K9', 26.50));
$cat->setToy('tiragraffi per gatti', new Item('https://picsum.photos/300/300', 'tiragraffi', 'questo è un tiragraffi per gatti', 'tiragraffi', '15', 'nessuna', 18));

$cat->setKennel_Mats('150 x 50x 100 cm', 'esterno', 'giallo', new Item('https://picsum.photos/300/300', 'cuccia per gatti', 'cuccia per gatti da esterno', 'cuccia', '2', 'nessuno', 110.00));
