<?php


class Human
{

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $name;

    /**
     * Human constructor.
     * @param $name
     */

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Human
     * @throws Exception
     */
    public function setAge(int $age): Human
    {
        if ($age < 0){
            throw new Exception('Age inférieur à 0');
        }

        $this->age = $age;
        return $this;
    }

    public function __call($name, $arguments)
    {
        throw new Exception('La méthode ' . $name . 'n\'est pas valide');
    }


}