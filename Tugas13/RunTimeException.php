<?php  
/**
 * 
 */
class FullStackException extends RuntimeException
{
	
	function __construct()
	{
		return parent::__construct("Sudah Penuh");
	}
}

class EmptyStackException extends RuntimeException{

	function __construct(){
		return parent::__construct("Kosong");
	}
}
?>