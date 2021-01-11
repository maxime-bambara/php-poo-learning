<?php

namespace App;

class Calculator
{
    /**
     * @var int
     */
    private $firstNumber;
    /**
     * @var int
     */
    private $secondNumber;

    /**
     * Calculator constructor.
     * @param int $firstNumber
     * @param int $secondNumber
     */
    public function __construct(int $firstNumber, int $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    public function addition () : float
    {
        return $this->firstNumber + $this->secondNumber;
    }

    public function divide () : float
    {
        return $this->firstNumber / $this->secondNumber;
    }

    public function multiply () : float
    {
        return $this->firstNumber * $this->secondNumber;
    }


}