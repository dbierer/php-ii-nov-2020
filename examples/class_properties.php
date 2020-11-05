<?php
class Test
{
	public $status = 'OK';
	protected $name = 'Doug';
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
}
$test = new Test();
echo $test->getName();
$test->setName('Fred');
echo $test->getName();
echo "\n";
echo $test->status;
echo "\n";
$test->status = 'Not OK';
echo $test->status;
echo "\n";
