<?php


class Character
{

    /**
     * @var
     */
    public $life;
    /**
     * @var
     */
    public $attack;
    /**
     * @var
     */
    public $name;

    /**
     * @return int
     */
    public function getLife() : int
    {
        return $this->life;
    }

    /**
     * @param int $life
     * @return Character
     */
    public function setLife(int $life) : Character
    {
        if($life % 2 !== 0){
            $this->life = $life + 1;
        } else {
            $this->life = $life;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getAttack() : int
    {
        return $this->attack;
    }

    /**
     * @param int $attack
     * @return Character
     */
    public function setAttack(int $attack) : Character
    {
        $this->attack = $attack;
        return $this;
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
     * @return Character
     */
    public function setName(string $name) : Character
    {
        $this->name = $name;
        return $this;
    }




}