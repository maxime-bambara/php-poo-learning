<?php


class Moto extends Vehicle
{
    const MAX_MOTO_PASSENGER = 2;
    /**
     * @return string
     */
    public function getTrade() : string
    {
        return $this->trade;
    }

    /**
     * @param string $trade
     * @return Moto
     */
    public function setTrade(string $trade) : Moto
    {
        $this->trade = $trade;
        return $this;
    }

    function getEnergy()
    {
        // TODO: Implement getEnergy() method.
    }

    public function getPassengers(array $passengers): ?string
    {
        if(count($passengers) > self:self::MAX_MOTO_PASSENGER){
            return 'vous ne pouvez pas être autant dans le véhicule !'
        }
    }


}