<?php


class User
{
    private $username;

    /**
     * User constructor.
     * @param $username string
     */
    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function __toString() : string
    {
        return $this->username;
    }


}