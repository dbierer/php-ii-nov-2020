<?php
class Test
{
	public const NAME = 'Doug';
	public function getName()
	{
		return self::NAME;
	}
}
echo Test::NAME;
echo "\n";
$test = new Test();
echo $test->getName();
