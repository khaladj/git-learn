<?php

<<<<<<< HEAD
class Github
{
    private $array;
=======
/** 

TEST 

/**

class Github{
>>>>>>> dd76c14e8513c7c91240299f438747c487cf7e4f

    public function __construct($array)
    {
        $this->setArray($array);
    }
    
    
    public function setArray($array)
    {
        $this->array = $array;
    }

<<<<<<< HEAD
  
    public function print_array()
    {
        print_r($this->array);
    }
=======
	function __construct($array){
			$this->setArray($array);
	}
	
	
	function setArray($array){
		$this->array = $array; 
	}

	

	function print_array(){
		print_r($this->array);
	}

>>>>>>> dd76c14e8513c7c91240299f438747c487cf7e4f
}
