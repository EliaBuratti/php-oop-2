<?php

trait IsString
{

    public function __construct(protected string $str)
    {
        $this->str = $str;
    }


    function checkStr($_str)
    {

        if (!is_string($_str){
            throw new Exception('this not a string, please review the values.', 1)})
            return $_str;
    }
}
