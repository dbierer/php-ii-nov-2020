<?php
// The superclass
	
class UserEntity {
	
    protected $firstName;
	
    public function setFirstName (string $firstName) {
	
        $this->firstName = $firstName;
	
    }
	
}
	
 
	
// The subclass
	
class GuestUser extends UserEntity {
	
    public function setFirstName(string $firstName, string $mi = null) {
	
        $this->firstname = (!$mi) ? parent::setFirstName($firstName) : $firstName . ' ' . $mi;
	
    }
	
}
