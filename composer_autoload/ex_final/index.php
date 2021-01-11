<?php

use App\Calculator;
use NumberToWords\NumberToWords;

require __DIR__ . '/vendor/autoload.php';



$firstNumber = 2;
$secondNumber = 2;

$calculate = new Calculator($firstNumber,$secondNumber);

$additionResult = $calculate->addition();
$divideResult= $calculate->divide();
$multiplyResult= $calculate->multiply();

$numberToWords = new NumberToWords();

$results = array($additionResult, $divideResult, $multiplyResult);

foreach ($results as $result){
    $result = $numberToWords->getNumberTransformer('fr')->toWords($result);
    echo 'Le résultat de l\'opération est de : ' . $result;
}


