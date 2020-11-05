<?php
class Test
{
	protected $firstName = 'Fred';
	protected $lastName  = 'Flintstone';
	public function getFirstName()
	{
		return $this->firstName;
	}
	public function getLastName()
	{
		return $this->lastName;
	}
	public function getFullName()
	{
		return $this->getFirstName() . ' ' . $this->getLastName();
	}
}

