<?php
require 'Vehicle.php';
require 'Tesla.php';

$tesla = new Tesla();

$tesla->getEnergy();

echo ($tesla->getEnergy());