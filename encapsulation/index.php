<?php

require "Character.php";

$akali = new Character();
$akali->setLife(101);
$akali->setAttack(20);
$akali->setName("Akali");

$garen = new Character();
$garen->setLife(154);
$garen->setAttack(40);
$garen->setName("Garen");



var_dump($akali->getLife(), $garen->getLife());
