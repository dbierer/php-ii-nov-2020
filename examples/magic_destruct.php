<?php
class Test
{
	const IMG_DIR = '/docroot/images/captcha';
	public $firstName = 'Fred';
	public $lastName = 'Flintstone';
	public function __call($method, $params)
	{
		error_log(__CLASS__ . ': Tried to call this method ' . $method);
		throw new Exception('Tried to call undefined method');
	}
	/**
	 * Erase images older than 1 day
	 * Gets executed when request cycle ends
	 */
	public function __destruct()
	{
		$iter = new \RecursiveDirectoryIterator(self::IMG_DIR);
		$now = time();
		$yesterday = $now - (60 * 60 * 24);
		foreach ($iter as $name => $obj) {
			// find files older than 24 hours
			if ($obj->isFile() && $obj->getCTime() < $yesterday) {
				unlink($name);
			}
		}
	}
}
