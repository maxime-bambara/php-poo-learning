<?php


class Nurse extends Worker implements NurseInterface
{
    public function feed(): string
    {
        return 'I am feeding';
    }
}