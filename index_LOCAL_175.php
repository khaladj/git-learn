<?php

class Github
{
    private $array;

    public function __construct($array)
    {
        $this->setArray($array);
    }
    
    
    public function setArray($array)
    {
        $this->array = $array;
    }

  
    public function print_array()
    {
        print_r($this->array);
    }
}
