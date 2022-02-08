<?php
include("Stack.php");
include("RunTimeException.php");
	$stack = new Stack();
	try{
		$stack->push("1");
		$stack->push("2");
		echo strval($stack->pop())."<br>";
		echo strval($stack->pop())."<br>";
		echo strval($stack->pop())."<br>";

		$stack->push("3");
		$stack->push("4");
		echo strval($stack->pop())."<br>";
		$stack->push("5");
		$stack->push("6");
		$stack->push("7");
		$stack->push("8");
		$stack->push("9");
	}
	catch(EmptyStackException $e){
		echo $e->getMessage();
	}
	catch(FullStackException $e){
		echo $e->getMessage();
	}
	finally{
		echo "Yang ini selalu dijalankan";
	}
?>