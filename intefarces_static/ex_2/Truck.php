<?php


class Truck
{
    const EMISSION_RATE = 0.070;
    private $weight;
    private $km;

    /**
     * Truck constructor.
     * @param $weight
     * @param $km
     */
    public function __construct($weight, $km)
    {
        $this->weight = $weight;
        $this->km = $km;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return Truck
     */
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return float
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * @param float $km
     * @return Truck
     */
    public function setKm(float $km)
    {
        $this->km = $km;
        return $this;
    }

    public static function getCarbonImpact(float $truckKm, float $truckWeight) : float
    {
        return $truckKm * $truckWeight * self::EMISSION_RATE;
    }
}