<?php


class Auto extends Vehicle
{
    /**
     * @return string
     */
    public function getTrade()
    {
        return $this->trade;
    }

    /**
     * @param string $trade
     * @return Auto
     */
    public function setTrade($trade) : Auto
    {
        $this->trade = $trade;
        return $this;
    }

    function getEnergy()
    {
        // TODO: Implement getEnergy() method.
    }

}