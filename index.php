<?php

class Github
{
  private $array;
	
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