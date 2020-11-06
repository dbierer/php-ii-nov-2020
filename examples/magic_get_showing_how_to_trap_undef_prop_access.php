<?php
class Test
{
	public $firstName = 'Fred';
	public $lastName = 'Flintstone';
	public function __get($prop)
	{
		error_log('Tried to access undefined property: ' . $prop);
		return '';
	}
}
$test = new Test();
echo $test->firstName 
     . ' ' 
     . $test->mi
     . ' ' 
     . $test->lastName;


