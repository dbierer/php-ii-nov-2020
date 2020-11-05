<?php
namespace Doug\Test;	
class UserEntity 
{	
    public $firstName;
    protected $lastName;	
    public function __construct(string $firstName , string $lastName) 
    {
        $this->firstName = $firstName ;
        $this->lastName = $lastName ;
    }
    public function getArrayCopy()
    {
		return get_object_vars($this);
	}
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
