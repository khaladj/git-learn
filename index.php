<?php

class Github
{
    private $array;
/** 

TEST 

*/



    public function __construct($array)
    {
        $this->setArray($array);
    }
    
    
    public function setArray($array)
    {
        $this->array = $array;
    }

	function __construct($array){
			$this->setArray($array);
	}
	
	
	function setArray($array){
		$this->array = $array; 
	}

	

	function print_array(){
		print_r($this->array);
	}

}