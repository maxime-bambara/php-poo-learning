<?php
class LivretA extends Saving
{
    const MAXIMUM_AMOUNT = 22950;
    public function __construct()
    {
        $this->setRate(0.5);
    }
    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * @param int $amount
     * @return LivretA
     */
    public function setAmount(int $amount): LivretA
    {
        if ($amount > self::MAXIMUM_AMOUNT) {
            $this->amount = self::MAXIMUM_AMOUNT;
        } else {
            $this->amount = $amount;
        }
        return $this;
    }
    /**
     * @return int
     */
    function calculateOneYearInterest()
    {
        return $this->getAmount() * $this->getRate() /100;
    }
}