<?php


class Subscriber implements UserInterface, SubscriptionInterface
{
    public $name;
    public $modeOfPayment;
    public $subscriptionAmount;

    /**
     * Subscriber constructor.
     * @param $name
     * @param $modeOfPayment
     * @param $subscriptionAmount
     */
    public function __construct($name, $modeOfPayment, $subscriptionAmount)
    {
        $this->name = $name;
        $this->modeOfPayment = $modeOfPayment;
        $this->subscriptionAmount = $subscriptionAmount;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Subscriber
     */
    public function setName($name) : Subscriber
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return 'Subscriber';
    }

    /**
     * @return string
     */
    public function getModeOfPayment() : string
    {
        return $this->modeOfPayment;
    }

    /**
     * @param string $modeOfPayment
     * @return Subscriber
     */
    public function setModeOfPayment(string $modeOfPayment) : Subscriber
    {
        $this->modeOfPayment = $modeOfPayment;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubscriptionAmount() : int
    {
        return $this->subscriptionAmount;
    }

    /**
     * @param int $subscriptionAmount
     * @return Subscriber
     */
    public function setSubscriptionAmount(int $subscriptionAmount) : Subscriber
    {
        $this->subscriptionAmount = $subscriptionAmount;
        return $this;
    }

}