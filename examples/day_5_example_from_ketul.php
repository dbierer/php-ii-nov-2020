<?php
/*
*Placed in DefaultWorkspace\sandbox\Backflow\
*Interface to assign resident or commercial
*/

interface PropertyType {
	public function getPropertyType() : string;
	public function setPropertyType($propertyType) : void;
}


/*
*In a separate .php file the rest of the code
*/

//namespace DefaultWorkspace\sandbox\Backflow;
//use DefaultWorkspace\sandbox\Backflow\propertytype;
// The superclass to create a Wilkins pump
class Wilkins implements PropertyType
{
    protected $size, $diaMeter, $propertyType;

    public function setPropertyType($propertyType) : void
    {
		$this->propertyType = $propertyType;
	}
    public function getPropertyType() : string
    {
		return $this->propertyType;
	}
    public function setSizeInfo(int $size, int $diaMeter)
    {
        $this->size = $size;
        $this->diaMeter = $diaMeter;
    }
    public function redefinePropertyType($diaMeter){
        if ($diaMeter < "5") {
            $this->propertyType="Resident";
        }
        else {
            $this->propertyType="Commercial";
        }
    }

}

// The subclass creates serial number
class Serial extends Wilkins
{
    public $serialNumber;

    public function setInfo(int $size, int $diaMeter, int $serialNumber)
    {
        $this->setSizeInfo($size, $diaMeter);
        $this->serialNumber = $serialNumber;
    }

    public function getSerial()
    {
        return $this->serialNumber;
    }

    public function getFullSerial()
    {
        return $this->size . $this->diaMeter . $this->serialNumber;
    }
}

$pump1 = new Serial();
$pump1->setInfo(1, 2, 385793);
echo $pump1->getFullSerial();
