<?php

class Product extends Product_type
{
    public $category;



    public function __construct($_category)
    {
        $this->category = $_category;
    }
}


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
