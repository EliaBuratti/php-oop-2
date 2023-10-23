<?php

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


    public function __construct($_cover, $_name, $_description, $_category, $_quantity,  $_brand,  $_price)
    {

        if (!is_string($_name) || !is_string($_description) || !is_string($_category) || !is_string($_brand)) {
            //var_dump('false');
            throw new Exception('The data aren\' correct, please check the values: (all string)'
                . '<br/>'
                . 'name: ' . $_name . ' -> ' . gettype($_name)
                . '<br/>'
                . 'description: ' . $_description . ' -> ' . gettype($_description)
                . '<br/>'
                . 'category: ' . $_category . ' -> ' . gettype($_category)
                . '<br/>'
                .  'brand: ' . $_brand . ' -> ' . gettype($_brand)
                . '<br/>', 1);
        }

        if (!is_numeric($_quantity) || !is_numeric($_price)) {
            //var_dump('false');
            throw new Exception('The data aren\' correct, please check the values: (integer or double)'
                . '<br/>'
                . 'name: ' . $_quantity . ' -> ' . gettype($_quantity)
                . '<br/>'
                . 'description: ' . $_price . ' -> ' . gettype($_price)
                . '<br/>', 1);
        }


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
