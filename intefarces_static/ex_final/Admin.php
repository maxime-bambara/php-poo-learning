<?php


class Admin implements UserInterface
{
    public $name;

    /**
     * Admin constructor.
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
     * @return Admin
     */
    public function setName(string $name) : Admin
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole() : string
    {
        return 'Admin';
    }
}