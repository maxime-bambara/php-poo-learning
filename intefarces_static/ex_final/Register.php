<?php


class Register implements UserInterface
{
    public $name;

    /**
     * Register constructor.
     * @param $name string
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Register
     */
    public function setName(string $name) : Register
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole() : string
    {
        return 'Register';
    }

}