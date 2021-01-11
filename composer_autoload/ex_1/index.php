<?php

namespace App;

use App\World\World;

require __DIR__ . '/vendor/autoload.php';

$world = new World();
echo $world->sayHello();

$univers = new Univers();
echo $univers->sayHello();