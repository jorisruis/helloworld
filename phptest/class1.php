<?php 

class Test1
{
	public $prop1 = 10;

	public function set_Prop1($newVar)
	{
		$this->prop1 = $newVar; 
	}

	public function get_Prop1()
	{
		return $this->prop1;
	}

	public function sum()
	{
		$a = 5; $b = 10;
		return $a + $b;
	}
}

$obj1 = new Test1();
echo $obj1->get_Prop1() + '</br>';
$obj1->set_Prop1(10);
echo $obj1->get_Prop1();

// var_dump($obj1);

?>