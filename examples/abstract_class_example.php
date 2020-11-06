<?php
abstract class Base
{
	protected $key = '';
	protected $hash = '';
	protected $plainText = '';
	public function __construct(string $plainText)
	{
		$this->plainText = $plainText;
	}
	public abstract function hash($plainText);
}
class Md5Hash extends Base
{
	public function hash($plainText)
	{
		$this->hash = md5($plainText);
	}
}
// NOTE: fails to compile because hash() hasn't been defined here
class BcryptHash extends Base
{
}
