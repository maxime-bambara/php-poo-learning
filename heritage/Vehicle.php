<?php


abstract class Vehicle
{
    const MAX_PASSENGER = 7;
    protected string $trade ;
    public function go()
    {
        return 'this vehicle is moving forward';
	}

	abstract public
    function getEnergy();

    protected array $passengers;

    public function getPassengers(array $passengers): ?string
    {
        if (count($passengers) > self::MAX_PASSENGER) {
            return 'vous ne pouvez pas être autant dans le véhicule !'
	     }
	}
}



}