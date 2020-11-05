<?php
namespace Doug\Test;	
	
class GuestEntity extends UserEntity 
{	
    public $role;	
    public function __construct(string $firstName , string $lastName, string $role) 
    {
		parent::__construct($firstName,$lastName);
        $this->role = $role;
    }
    public function getRole() 
    {	
        return $this->role;
    }
}
