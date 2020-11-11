<?php
namespace HomeBuilding\Controller;

abstract class Plans implements PlansInterface
{
	protected $planSwing = 'R';
    protected $planSquareFoot = 0;
    protected $planId;
    protected $communityId;
    /**
     * $communityData = Obtain Community Data from database
     * $plansData = Obtain plan Data from database
     */
	public function __construct(string $communityId , string $planId) 
	{
		$this->communityId = $communityId ;
		$this->planId = $planId ;
		// simulates database lookup:
		$planSquarefoot = 3075;
		$planSwing = 'R';
		$this->planSquareFoot = $planSquarefoot;
		$this->planSwing = $planSwing ;
	}
    public function getPlanSquareFoot() : int
    {
        return $this->planSquareFoot;
    }
    /**
     * Returns "R" or "L" depending on the way the door swing
     * 
     * @return string $swing : "R" or "L"
     */
    public function getPlanSwing() : string
    {
        return $this->planSwing;
    }
}
