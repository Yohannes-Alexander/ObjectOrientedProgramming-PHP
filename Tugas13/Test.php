<?php  
include("Stack.php");
include("RunTimeException.php");

class Test{
	private $stack ;
	
	public function __construct(){
		$this->stack = new Stack();
	}

	public function Test1($s){
		$this->stack = new Stack($s);
	}

	public function testStackPush(){
		try{
			$this->stack->push("3");
			$this->stack->push("4");
			echo strval($this->stack->pop())."<br>";
			$this->stack->push("5");
			$this->stack->push("6");
			$this->stack->push("7");
			$this->stack->push("8");
			$this->stack->push("9");
		}
		catch(FullStackException $e){
			echo "Full <br>";
		}
		finally{
			echo "Yang ini selalu dijalankan <br>";
		}
	}

	public function testStackPop(){
		try{
			$this->stack->push("1");
			$this->stack->push("2");
			echo strval($this->stack->pop())."<br>";
			echo strval($this->stack->pop())."<br>";
			echo strval($this->stack->pop())."<br>";

		}
		catch(EmptyStackException $e){
			echo $e->getMessage()."<br>";
		}
		finally{
			echo "Yang ini selalu dijalankan <br>";
		}
	}
}

$t = new Test();
$t->testStackPop();
$t->testStackPush();
?>