<?php 

class Test1
{
	private $prop1 = 10;

	function setProp1($newVar)
	{
		$this->$prop1 = $newVar; 
	}

	function getProp1()
	{
		return $this->$prop1;
	}

	function sum()
	{
		$a = 5; $b = 10;
		return $a + $b;
	}
}

$obj1 = new Test1();
echo $obj1->getProp1;
$obj1->setProp1 = 10;
echo $obj1->getProp1;

// var_dump($obj1);

?>