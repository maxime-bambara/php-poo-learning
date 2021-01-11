<?php


class User
{
    const REFUSE_PASSWORD = ['password', '123456', 'azerty'];

    private $username;

    private $password;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {

        if (in_array($password, self::REFUSE_PASSWORD)){
            throw new PasswordException('Mot de passe interdit');
        }
        $this->password = $password;
    }
}