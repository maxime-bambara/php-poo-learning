<?php
require 'Saving.php';
require 'LivretA.php';
var_dump(LivretA::MAXIMUM_AMOUNT);
//retourne 22950
$livretA = new LivretA;
$livretA->setAmount(12000);
var_dump($livretA->getRate());
// retourne 0.5
var_dump($livretA->calculateOneYearInterest());
// retourne 60
$livretA->setAmount(30000);
var_dump($livretA->getAmount());
// retourne 22950 (le plafond)