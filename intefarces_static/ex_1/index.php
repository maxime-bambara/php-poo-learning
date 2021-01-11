<?php
require 'Ant.php';
require 'NurseInterface.php';
require 'SoldierInterface.php';
require 'Worker.php';
require 'Soldier.php';
require 'Nurse.php';

$firstSoldier  = new Soldier();
$secondSoldier = new Soldier();
$thirdSoldier  = new Soldier();

$firstNurse	= new Nurse();
$secondNurse   = New Nurse();

$ants = [
    $firstSoldier,
    $secondSoldier,
    $thirdSoldier,
    $firstNurse,
    $secondNurse,
];

//Pour commencer, la fourmilière se fait attaquer. Seules les fourmis ayant la capacité de se battre viennent défendre la fourmilière

foreach ($ants as $ant) {
    if ($ant instanceof SoldierInterface) {
        var_dump($ant->fight());
    }
}
echo PHP_EOL;
//Ensuite, les larves ont faims, seules les fourmis ayant la capacité de nourrir viennent nourrir les larves
foreach ($ants as $ant) {
    if ($ant instanceof NurseInterface) {
        var_dump($ant->feed());
    }
}

/*
 * L'exercice est réussi si le résultat dans le terminal est le suivant :
 * string(13) "I am fighting"
 * string(13) "I am fighting"
 * string(13) "I am fighting"
 *
 * string(12) "I am feeding"
 * string(12) "I am feeding"
 */