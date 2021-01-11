<?php


class Soldier extends Worker implements SoldierInterface
{

    public function fight(): string
    {
        return 'Ready to fight';
    }
}