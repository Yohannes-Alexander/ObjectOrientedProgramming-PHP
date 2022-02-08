<?php  
class Stack {
	private $size;
	private $top;
	private $element ;

	public function __construct(){
		$this->size = 5;
		$this->top = 0;
		$this->element = array(null,null,null,null,null);
	}

	public function __construct1($s){
		$this->size = s;
		$this->top = 0;
		$this->element = array();
		for ($x = 0 ; $x < $s ; $x++){
			$this->element[]=null;
		}

	}

	public function getSize(){
		return $this->size;
	}

	public function getTop(){
		return $this->top;
	}

	public function push($o){
		if($this->top < $this->size){
			$this->element[$this->top] = $o;
			$this->top = $this->top+1;
		}
		else{
			throw new FullStackException;
		}
		
	}

	public function pop(){
		if($this->top > 0){
			$copy = $this->element[$this->top-1];
			$this->top = $this->top - 1;
			array_pop($this->element);
		}
		else {
			throw new EmptyStackException;
			
		}
		
		return $copy;
	}
}
?>