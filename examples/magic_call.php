<?php
class Test
{
	public $firstName = 'Fred';
	public $lastName = 'Flintstone';
	public function __call($method, $params)
	{
		error_log(__CLASS__ . ': Tried to call this method ' . $method);
		throw new Exception('Tried to call undefined method');
	}
}
$test = new Test();
echo $test->render();
