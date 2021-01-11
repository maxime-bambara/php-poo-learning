<?php
abstract class Saving
{
    protected $rate;
    protected $amount;
    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }
    /**
     * @param float $rate
     * @return Saving
     */
    public function setRate($rate): Saving
    {
        $this->rate = $rate;
        return $this;
    }
    abstract function calculateOneYearInterest();
}