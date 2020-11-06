<?php
class Base
{
	public function add($a, $b)
	{
		return $a + $b;
	}
	public function div(int $a, int $b)
	{
		return $a / $b;
	}
}
class Test extends Base
{
	public function div(int $a, int $b, string $label)
	{
		if ($b === 0) {
			return 0;
		} else {
			return $a / $b;
		}
	}
	public function op($op, $label, $a, $b)
	{
		return $label . $this->$op($a, $b);
	}
}
$base = new Base();
$test = new Test();
echo $test->op('div', '23 divided by 0 is ', 23, 0);
echo "\n";
echo $test->op('add', '23 plus 14 is ', 23, 14);
echo "\n";
	
