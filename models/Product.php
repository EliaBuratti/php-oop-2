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
        $food_info = $item->getArray();

        $arrayFood = array_merge($food_info, $foodValue);

        array_push($this->food, $arrayFood);
    }

    public function setToy($toy_type, Item $item)
    {

        $toyValue = ['toy_type' => $toy_type];
        $toy_info = $item->getArray();

        $arrayToy = array_merge($toy_info, $toyValue);

        array_push($this->toy, $arrayToy);
    }

    public function setLeash($leash_size, $leash_color, Item $item)
    {

        $leashValue = [
            'leash_size' => $leash_size,
            'leash_color' => $leash_color
        ];
        $leash_info = $item->getArray();

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
        $kennel_info = $item->getArray();

        $arrayKennel = array_merge($kennel_info, $kennelValue);

        array_push($this->kennel_mats, $arrayKennel);
    }
}

/**
 * this class generated an array of all input
 * 
 * @param string $_cover path of picture to show
 * @param string $_name name of item
 * @param string $_description the description of item
 * @param string $_category witch category of item appertain 
 * @param int $_quantity number of item which still are available
 * @param string $_brand brand of item
 * @param float $_price price of one item
 * 
 * @return array

 */
class Item
{
    use getter;
    protected $productArray;


    public function __construct(string $_cover, string $_name, string $_description, string $_category, int $_quantity, string $_brand, float $_price)
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
