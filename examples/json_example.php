<?php
class Test
{
	public $first = 'Fred';
	public $last  = 'Flintstone';
	protected $status = 'VIP';
	public function getStatus()
	{
		return $this->status;
	}
	public function getJson()
	{
		return json_encode(get_object_vars($this));
	}
}

$test = new Test();
var_dump($test);

echo json_encode($test) . "\n";
echo $test->getJson() . "\n";

$json = $test->getJson();
$obj = json_decode($json);

// NOTE: data type is stdClass() *not* Test!
var_dump($obj);

// returns: PHP Fatal error:  Uncaught Error: Call to undefined method stdClass::getStatus()
echo $obj->getStatus();

