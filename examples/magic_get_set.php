<?php
class Test
{
	public $firstName = 'Fred';
	public $lastName = 'Flintstone';
	protected $misc = [];
	public function __set($prop, $val)
	{
		echo __METHOD__ . PHP_EOL;
		$this->misc[$prop] = $val;
	}
	public function __get($prop)
	{
		echo __METHOD__ . PHP_EOL;
		return $this->misc[$prop] ?? '';
	}
}
$test = new Test();
$test->mi = 'F';
echo $test->firstName 
     . ' ' 
     . $test->mi
     . ' ' 
     . $test->lastName;


