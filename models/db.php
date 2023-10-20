<?php

// setFood =  'food_type'  'weigth'  
// setToy = 'toy_type'
// setLeash =  $leash_size, 'leash_color'
// setKennel_Mats = 'kennel_dimension', 'kennel_use', 'kennel_color'

$cane->setToy(
    'gommoso',
    new Item(
        'https://picsum.photos/300/300',    //    $_cover,
        'pallina',                          //    $_name,
        'questa è una pallina per cani',    //    $_description,
        'gioco per cani',                   //    $_category,
        500,                                //    $_quantity,
        'Kong',                             //    $_brand,
        16.99                               //    $_price
    )
);


$cane->setFood('crocchette', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao questa è una descrizione', 'prova', 'ciao', 'altra prova', 16.99));
$cane->setFood('crocchette', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));
$cane->setLeash('cibo umido', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));

$cane->setKennel_Mats('cibo umido', 'pino', 'ciao', new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));




$gatto->setFood('crocchette', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao questa è una descrizione', 'prova', 'ciao', 'altra prova', 16.99));
$gatto->setFood('crocchette', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));

$gatto->setLeash('cibo umido', 40, new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));
$gatto->setToy('cibo umido', new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));

$gatto->setKennel_Mats('cibo umido', 'pino', 'ciao', new Item('https://picsum.photos/300/300', 'crocchetta', 'ciao', 'prova', 'ciao', 'altra prova', 16.99));
